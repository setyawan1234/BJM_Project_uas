<?php

namespace Tests\Feature;
use Tests\TestCase;

class DataUserCRUDTest extends TestCase
{
    //create
    public function test_create_data_user_to_DashbordAdmin()
    {
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->post('/datapegawai',[
            'foto' => 'polinema.jpg',
            'nama' => 'galang1',
            'email' => 'galang1@gmail.com',
            'password' => '1234',
            'level' => 'Admin',
            'tanggal_join' => '2022-12-10',
        ]);
        $response->assertRedirect('/datapegawai');
    }

    //detail
    public function test_admin_can_detail_data_user(){
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');
        
        $response = $this->get('/datapegawai/5');
        $response->assertStatus(200);
    }

    //edit
    public function test_admin_can_edit_data_user(){
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->put('/datapegawai/5', [
            'foto' => 'polinema.jpg',
            'nama' => 'GALANGWOY',
            'email' => 'galang1woy@gmail.com',
            'password' => '1234',
            'level' => 'Admin',
            'tanggal_join' => '2022-12-10',
        ]);

        $response->assertRedirect('/datapegawai');
    }

    //delete
    public function test_admin_can_delete_data_user(){
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->delete('/datapegawai/5');
        $response->assertRedirect('/datapegawai');
    }
}
