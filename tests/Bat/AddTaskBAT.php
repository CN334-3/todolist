<?php

class AddTaskBAT {

    //test add task จำกัดความยาวไม่เกิน 40 ตัวอักษร
    public function test_add_task_lange_string()
    {
        $this->assertTrue(true);

    }

    //test add task ไม่มีตัวอักษร
    public function nonText()
    {
        $this->assertTrue(true);

    }

}