<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndikatorBobotCRUDTest extends TestCase
{
    //create
    public function test_create_indikator_bobot_to_DashbordAdmin()
    {
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->post('/indikatorbobot',[
            'nama_indikator' => '1',
            'nilai_bobot' => '1',
        ]);
        $response->assertRedirect('/indikatorbobot');
    }

    //detail
    public function test_admin_can_detail_indikator_bobot(){
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');
        
        $response = $this->get('/indikatorbobot/1');
        $response->assertStatus(200);
    }

    //edit
    public function test_admin_can_edit_indikator_bobot(){
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->put('/indikatorbobot/1', [
            'nama_indikator' => '0.3',
            'nilai_bobot' => '0.3',
        ]);

        $response->assertRedirect('/indikatorbobot');
    }

    //delete
    public function test_admin_can_delete_indikator_bobot(){
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->delete('/indikatorbobot/1');
        $response->assertRedirect('/indikatorbobot');
    }
}
