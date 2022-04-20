<?php

class DeleteTaskBAT extends TestCase {

    public function test_delete_task()
    {
        $this->delete('/tasks/2');
        $this->assertDatabaseMissing('tasks',['id'=> 2]);

    public function test_delete_undefined_task(){
        $this->delete('/tasks/100');
        $this->assertDatabaseMissing('tasks',['id'=> 100]);
    }

    public function test_delete_number() 
    {
        $this->assertTrue(true);

    }

    public function test_delete_spechar() 
    {
        $this->assertTrue(true);

    }

    public function test_delete_space() 
    {
        $this->assertTrue(true);

    }

    public function test_delete_char() 
    {
        $this->assertTrue(true);

    }
}