<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Income;
use App\Models\Expense;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReportTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_calculates_correct_total_income_expense_and_balance()
    {
        $user = User::factory()->create();

        Income::factory()->create([
            'user_id' => $user->id,
            'jumlah'  => 100000,
            'tanggal' => now(),
            'kategori' => 'Salary',
        ]);

        Income::factory()->create([
            'user_id' => $user->id,
            'jumlah'  => 50000,
            'tanggal' => now(),
            'kategori' => 'Freelance',
        ]);

        Expense::factory()->create([
            'user_id' => $user->id,
            'jumlah'  => 30000,
            'tanggal' => now(),
            'kategori' => 'Food',
        ]);

        Expense::factory()->create([
            'user_id' => $user->id,
            'jumlah'  => 20000,
            'tanggal' => now(),
            'kategori' => 'Transport',
        ]);

        $this->actingAs($user);
        $response = $this->get('/reports'); 

        $response->assertStatus(200);
        $response->assertViewHas('totalIncome', 150000);
        $response->assertViewHas('totalExpense', 50000);
        $response->assertViewHas('balance', 100000);
    }
}
