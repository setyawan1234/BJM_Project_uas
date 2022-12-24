<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DataPenyakitCRUDTest extends TestCase
{
    //create
    public function test_create_data_penyakit_to_DashbordAdmin()
    {
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->post('/datapenyakit',[
            'kd_penyakit' => 'P1',
            'penyakit' => 'Mesin mati',
            'definisi' => 'Mesin mati disebabkan terendam air',
            'solusi' => 'Ganti mesin yang baru',
        ]);
        $response->assertRedirect('/datapenyakit');
    }

    //detail
    public function test_admin_can_detail_data_penyakit(){
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');
        
        $response = $this->get('/datapenyakit/1');
        $response->assertStatus(200);
    }

    //edit
    public function test_admin_can_edit_data_penyakit(){
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->put('/datapenyakit/1', [
            'kd_penyakit' => 'P1',
            'penyakit' => 'Mesin mati',
            'definisi' => 'Mesin mati disebabkan terkena banjir atau tsunami',
            'solusi' => 'Ganti mesin yang baru',
        ]);

        $response->assertRedirect('/datapenyakit');
    }

    //delete
    public function test_admin_can_delete_data_penyakit(){
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->delete('/datapenyakit/1');
        $response->assertRedirect('/datapenyakit');
    }
}
