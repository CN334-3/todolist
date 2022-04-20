<?php

class AddTaskBAT {

    //test add task จำกัดความยาวไม่เกิน 40 ตัวอักษร
    public function test_add_task_lange_string()
    {
        $user = new User([
            'addTask' => "000000000000000000000000000000000000000000"
        ]);
        $this->assertNotEquals('add test task', $user->addTask)
    }

    //test add task ไม่มีตัวอักษร
    public function nonText()
    {
        $user = new User([
            'addTask' => ""
        ]);
        $this->assertNotEquals('add test task', $user->addTask)

    }

}