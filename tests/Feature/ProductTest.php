<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    
    /** @test */
    public function verificarProdutos()
    {
        $response = $this->get('http://127.0.0.1/api/product');

        $response->assertStatus(200);

        $response->assertSee('success');
        $response->assertDontSee('not found');
    }

    /** @test */
    public function verificarProduto()
    {
        $response = $this->get('http://127.0.0.1/api/product/24680');

        $response->assertStatus(200);

        $response->assertSee('success');
        $response->assertDontSee('not found');
    }    

    /** @test */
    public function verificarCodBarras()
    {
        $product = Product::find('24680');
        
        $this->assertEquals('24680', $product->BAR_CODE);
    }

    /** @test */
    public function verificarEditar()
    {
        $response = $this->put('http://127.0.0.1/api/product/24680?title=FFXV');

        $response->assertStatus(200);

        $response->assertSee('success');
        $response->assertDontSee('not found');
    }

    /** @test */
    public function verificarDeletar()
    {
        $response = $this->delete('http://127.0.0.1/api/product/24680');

        $response->assertStatus(200);

        $response->assertSee('success');
        $response->assertDontSee('not found');
    }
}
