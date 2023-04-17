<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/contacts');

        $response->assertStatus(200);
    }

    public function test_view()
    {
        $response = $this->get('/contacts');
        $response->assertSee('Contacts Page');
        $response->assertDontSee('About page');
    }
}
