<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\ReportController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Transaction;

class ReportTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_returns_correct_nominal_for_pie_graph()
    {
        Transaction::factory()->create(['category' => 'Food', 'amount' => 50000]);
        Transaction::factory()->create(['category' => 'Transport', 'amount' => 30000]);
        Transaction::factory()->create(['category' => 'Food', 'amount' => 25000]);
        $controller = new ReportController();
        $data = $controller->getPieChartData(); 
        $this->assertEquals(75000, $data['Food']);
        $this->assertEquals(30000, $data['Transport']);
    }
}
