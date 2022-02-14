<?php

namespace Tests\Feature;

use Faker\Factory;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ModelTest extends TestCase
{
    use RefreshDatabase;

    public function testValidRegistration() //Failure
    {
        $faker = Factory::create();
        $email = $faker->unique()->email;
        $count = User::count();

        $response = $this->post('/register', [
            'email' => $email,
            'name' => 'USERSTEST',
            'password' => Hash::make('123456789'),
            'role' => User::USER_ROLE,
        ]);

        $newCount = User::count();

        $this->assertNotEquals($newCount, $count);

        //dd(session('errors'));
    }


    public function testInvalidRegistration()
    {
        $response = $this->post('/register', [
            'name' => 'test',
            'email' => '',
            'password' => 'password',
            'password_confimation' => 'password',
        ]);

        $response->assertSessionHasErrors();
    }
}
