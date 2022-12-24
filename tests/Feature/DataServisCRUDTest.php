<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DataServisCRUDTest extends TestCase
{
    public function test_create_data_servis_to_DashboardAdmin()
    {
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->post('/service',[
            'id' => '8',
            'nama' => 'Ganti Oli Mobil',
            'biaya' => '150000',
        ]);
        $response->assertRedirect('/service');
    }

    //detail
    public function test_admin_can_detail_data_servis(){
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');
        
        $response = $this->get('/service/8');
        $response->assertStatus(200);
    }

    //edit
    public function test_admin_can_edit_data_servis()
    {
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->put('/service/8',[
            'id' => '8',
            'nama' => 'Ganti Oli Mobil',
            'biaya' => '75000',
        ]);
        $response->assertRedirect('/service');
    }

    //delete
    public function test_admin_can_delete_data_servis(){
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->delete('/service/8');
        $response->assertRedirect('/service');
    }
}
