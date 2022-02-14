<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTest extends TestCase
{
    use RefreshDatabase;

    public function testValidRegistration() //Failure
    {
        $count = User::count();

        $response = $this->post('/register', [
            'name' => 'test',
            'email' => 'test@test.com',
            'password' => 'password',
            'password_confimation' => 'password',
        ]);

        $newCount = User::count();

        $this->assertNotEquals($count, $newCount);
    }
}
