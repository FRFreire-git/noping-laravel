<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Supplier;

class SupplierTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function verificarSuppliers()
    {
        $response = $this->get('http://127.0.0.1/api/supplier');

        $response->assertStatus(200);

        $response->assertSee('success');
        $response->assertDontSee('not found');
    }

    /** @test */
    public function verificarSupplier()
    {
        $response = $this->get('http://127.0.0.1/api/supplier/04399927000105');

        $response->assertStatus(200);

        $response->assertSee('success');
        $response->assertDontSee('not found');
    }    

    /** @test */
    public function verificarCNPJ()
    {
        $supplier = Supplier::find('04399927000105');
        
        $this->assertEquals('04399927000105', $supplier->CNPJ);
    }

    /** @test */
    public function verificarEditar()
    {
        $response = $this->put('http://127.0.0.1/api/supplier/04399927000105?name=TOEI');

        $response->assertStatus(200);

        $response->assertSee('success');
        $response->assertDontSee('not found');
    }

    /** @test */
    public function verificarDeletar()
    {
        $response = $this->delete('http://127.0.0.1/api/supplier/04399927000105');

        $response->assertStatus(200);

        $response->assertSee('success');
        $response->assertDontSee('not found');
    }
}
