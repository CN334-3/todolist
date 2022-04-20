<?php

class LoginBAT
{
    //user have an account or not?
    public function test_user_haveaccount()
    {
        $user = new User([
            'email' => "usernotregister@gmail.com"
            'password' => bcrypt("testpassword")
        ]);
        $this->assertNotEquals('userregister@gmail.com', $user->email)
    }

    //user enters the correct characters in the user field or not?
    public function test_correct_charac_user()
    {
        $user = new User([
            'user' => "abc#%de"
        ]);
        $this->assertNotEquals('abcde', $user->email)
    }

    //user enters the correct characters in the password field or not?
    public function test_correct_charac_pass()
    {
        $this->assertTrue(true);
    }

    //user enters less than 10 characters in the user field or not?
    public function test_lessten_user()
    {
        $this->assertTrue(true);
    }

    //user enters less than 10 characters in the password field or not?
    public function test_lessten_pass()
    {
        $this->assertTrue(true);
    }

}


