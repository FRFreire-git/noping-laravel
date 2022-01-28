<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Sale;

class SaleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function verificarSales()
    {
        $response = $this->get('http://127.0.0.1/api/sale');

        $response->assertStatus(200);

        $response->assertSee('success');
        $response->assertDontSee('not found');
    }

    /** @test */
    public function verificarSale()
    {
        $response = $this->get('http://127.0.0.1/api/sale/16410954077');

        $response->assertStatus(200);

        $response->assertSee('success');
        $response->assertDontSee('not found');
    }    

    /** @test */
    public function verificarCPF()
    {
        $sale = Sale::find('16410954077');
        
        $this->assertEquals('16410954077', $sale->CPF);
    }

    /** @test */
    public function verificarDeletar()
    {
        $response = $this->delete('http://127.0.0.1/api/sale/16410954077');

        $response->assertStatus(200);

        $response->assertSee('success');
        $response->assertDontSee('not found');
    }
}
