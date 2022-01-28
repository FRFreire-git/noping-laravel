<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Client;

class ClientTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function verificarClientes()
    {
        $response = $this->get('http://127.0.0.1/api/client');

        $response->assertStatus(200);

        $response->assertSee('success');
        $response->assertDontSee('not found');
    }

    /** @test */
    public function verificarCliente()
    {
        $response = $this->get('http://127.0.0.1/api/client/47086093025');

        $response->assertStatus(200);

        $response->assertSee('success');
        $response->assertDontSee('not found');
    }    

    /** @test */
    public function verificarCPF()
    {
        $client = Client::find('47086093025');
        
        $this->assertEquals('47086093025', $client->CPF);
    }

    /** @test */
    public function verificarEditar()
    {
        $response = $this->put('http://127.0.0.1/api/client/47086093025?name=CICLANO');

        $response->assertStatus(200);

        $response->assertSee('success');
        $response->assertDontSee('not found');
    }

    /** @test */
    public function verificarDeletar()
    {
        $response = $this->delete('http://127.0.0.1/api/client/47086093025');

        $response->assertStatus(200);

        $response->assertSee('success');
        $response->assertDontSee('not found');
    }

}
