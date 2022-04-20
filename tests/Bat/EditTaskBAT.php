<?php

class EditTaskBAT extends TestCase 
{
    public function test_edit_task_to_null() {
        $task1 = new Task([
            'user_id' => 1,
            'description' => 'Test add test to todolist',
            'date' => '11/11/2022',
            'deadline' => '12/12/2022'
        ]);

        $task1->description = null;

        $this -> assertEquals(null, $task1 -> description);
    }

    public function test_edit_task_to_null() {
        $task1 = new Task([
            'user_id' => 1,
            'description' => 'Test add test to todolist',
            'date' => '11/11/2022',
            'deadline' => '12/12/2022'
        ]);

        $task1->description = null;

        $this -> assertEquals(null, $task1 -> description);
    }

    public function testEditWeirdAlphaTask()
    {
        $task1 = new Task([
            'text' => '+-๑๒๓๔๕๖๗๘๙!@#$%^&&()',
            'condition' => '+-๑๒๓๔๕๖๗๘๙!@#$%^&&()'
        ]);
        $this -> assertEquals('+-๑๒๓๔๕๖๗๘๙!@#$%^&&*()', $task1 ->text);
    }

    public function testEditAlphaTask()
    {
        $task1 = new Task([
            'text' => '1234567890',
            'condition' => '1234567890'
        ]);
        $this -> assertEquals('1234567890', $task1 ->text);
    }

}