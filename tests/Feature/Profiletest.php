<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ProfileTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guest_cannot_access_profile_page()
    {
        $response = $this->get('/profile');
        $response->assertRedirect('/login');
    }

    /** @test */
    public function authenticated_user_can_view_their_profile()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/profile');

        $response->assertStatus(200);
        $response->assertSee($user->name);
        $response->assertSee($user->email);
    }

    /** @test */
    public function user_can_update_their_profile_information()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->put('/profile', [
            'name' => 'Salman Rizky',
            'email' => 'salman@example.com',
        ]);

        $response->assertRedirect(); // biasanya redirect kembali ke /profile
        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'name' => 'Salman Rizky',
            'email' => 'salman@example.com',
        ]);
    }

    /** @test */
    public function user_can_upload_and_update_profile_picture()
    {
        Storage::fake('public');

        $user = User::factory()->create();
        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->actingAs($user)->post('/profile/photo', [
            'photo' => $file,
        ]);

        $response->assertRedirect();
        Storage::disk('public')->assertExists('profile-photos/' . $file->hashName());
    }

    /** @test */
    public function user_can_download_their_profile_as_pdf()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/profile/pdf');

        $response->assertStatus(200);
        $response->assertHeader('content-type', 'application/pdf');
    }

    /** @test */
    public function user_cannot_access_other_users_profile()
    {
        $userA = User::factory()->create();
        $userB = User::factory()->create();

        $response = $this->actingAs($userA)->get('/profile/' . $userB->id);

        $response->assertStatus(403);
    }
}
