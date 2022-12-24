<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DataSparepartCRUDTest extends TestCase
{

    //create
    public function test_create_data_sparepart_to_DashboardAdmin()
    {
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->post('/datasparepart',[
            'id' => '5',
            'image' => 'polinema.jpg',
            'nama' => 'Oli Mobil',
            'harga' => '250000',
            'stok' => '',
        ]);
        $response->assertRedirect('/datasparepart');
    }

    //detail
    public function test_admin_can_detail_data_sparepart(){
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');
        
        $response = $this->get('/datasparepart/4');
        $response->assertStatus(200);
    }

    //edit
    public function test_admin_can_edit_data_sparepart()
    {
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->put('/datasparepart/4',[
            'id' => '5',
            'image' => 'polinema.jpg',
            'nama' => 'Oli Mobil',
            'harga' => '100000',
            'stok' => '5',
        ]);
        $response->assertRedirect('/datasparepart');
    }

    //delete
    public function test_admin_can_delete_data_sparepart(){
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->delete('/datasparepart/5');
        $response->assertRedirect('/datasparepart');
    }
}
