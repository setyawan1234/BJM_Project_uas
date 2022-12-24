<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DataPembelianCRUDTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_data_pembelian_to_DashboardAdmin()
    {
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->post('/pembelian',[
            'sparepart_id' => '4',
            'hargaSparepart' => '20000',
            'user_id' => '1',
            'tanggal' => '2022-12-1',
            'jumlah' => '2',
            'total_harga' => '600000',
        ]);
        $response->assertRedirect('/pembelian');
    }

    //delete
    public function test_admin_can_delete_data_pembelian(){
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->delete('/pembelian/6');
        $response->assertRedirect('/pembelian');
    }
}
