<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RuleDiagnosaCRUDTest extends TestCase
{
    //create
    public function test_create_rule_diagnosa_to_DashbordAdmin()
    {
        $response = $this->post('/login',[
            'email' => 'jumain@gmail.com',
            'password' => '1234',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->post('/rulediagnosa',[
            'penyakits_id' => '3',
            'gejalas_id' => '2',
            'indikatorbobots_id' => '2'
        ]);
        $response->assertRedirect('/rulediagnosa');
    }
}
