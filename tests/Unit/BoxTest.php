<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Box;

class BoxTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_create_box()
    {
        $box = new Box();
        $this->assertNotNull($box);
    }

    public function test_in_box()
    {
        $box = new Box();
        $this->assertTrue($box->has('toy'));
    }

    public function test_add_to_box()
    {
        $box = new Box();
        $box->add('glass');
        $this->assertTrue($box->has('glass'));
    }



}
