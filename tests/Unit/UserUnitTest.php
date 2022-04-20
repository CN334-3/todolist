<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class UserUnitTest extends TestCase
{

    public function test_basic_test()
    {
        $this->assertTrue(true);
    }

    public function test_user_creation()
    {

        $user = new User([
            'name' => "Psrtodolist",
            'email' => "psr@mail.com",
            'password' => bcrypt("testpassword")

        ]);

        $this->assertEquals('Psrtodolist', $user->name);
        $this->assertEquals('psr@mail.com', $user->email);
    }

    public function test_thai_name()
    {

        $user = new User([
            'name' => "เทสชื่อ",
            'email' => "psr@mail.com",
            'password' => bcrypt("testpassword")

        ]);

        $this->assertEquals('เทสชื่อ', $user->name);
    }

    public function test_thai_email()
    {

        $user = new User([
            'name' => "Psrtodolist",
            'email' => "เทสอีเมล@mail.com",
            'password' => bcrypt("testpassword")

        ]);

        $this->assertEquals('เทสอีเมล@mail.com', $user->email);
    }


}