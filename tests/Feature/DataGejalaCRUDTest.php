<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DataGejalaCRUDTest extends TestCase
{
    //create
    public function test_create_data_gejala_to_DashbordAdmin()
    {
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->post('/datagejala',[
            'kd_gejala' => 'G1',
            'gejala' => 'Mesin susah dinyalakan',
        ]);
        $response->assertRedirect('/datagejala');
    }

    //detail
    public function test_admin_can_detail_data_gejala(){
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');
        
        $response = $this->get('/datagejala/1');
        $response->assertStatus(200);
    }

    //edit
    public function test_admin_can_edit_data_gejala(){
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->put('/datagejala/1', [
            'kd_gejala' => 'P1',
            'gejala' => 'Mesin mati total',
        ]);

        $response->assertRedirect('/datagejala');
    }

    //delete
    public function test_admin_can_delete_data_gejala(){
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->delete('/datagejala/1');
        $response->assertRedirect('/datagejala');
    }
}
