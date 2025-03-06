<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_basic_example()
    {
        $response = $this->get('/');  // Replace with your route or URL to test
        
        // Assert that the response is successful
        $response->assertStatus(200);
        
        // Optionally, you can check if the response contains certain content
        $response->assertSee('Welcome');
    }
}
