<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PlayerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testGetPlayers() 
    {
        $response = $this->get('/players');
        $response->assertStatus(200);
    }
    public function testGetSpecificPlayer() 
    {
        $response = $this->get('/player/1');
        $response->assertStatus(200);
    }
    public function testGetSpecificPlayerWithWrongID() 
    {
        $response = $this->get('/player/1000');
        $response->assertStatus(400);
    }
}
