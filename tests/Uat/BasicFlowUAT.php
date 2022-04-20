<?php

class BasicFlowUAT
{
    //Add task
    public function test_addtask()
    {
        $task = new Task([
            'description' => null,
            'user_id' => 10
        ]);

        $this->assertEquals(null, $task->description);
    }

    //Delete task
    public function test_deletetask()
    {
        $this->assertTrue(true);
    }

    //Edit task
    public function test_edittask()
    {
        $this->assertTrue(true);
    }

    //Login task
    public function test_logintask()
    {
        $user = User::factory()->create();
 
        $response = $this->actingAs($user)
                         ->withSession(['banned' => false])
                         ->get('/');

        $this->actingAs($user, 'web');
    }

    //Register task
    public function test_registertask()
    {
        $response = $this->postJson('/api/user', [
        'name' => 'users',
        'email' => 'sally@example.com',
        'password' => '12345678',]);
 
        $response
            ->assertStatus(201)
            ->assertJson([
                'created' => true,
            ]);

        $this->assertTrue($response['created']);
    }
}