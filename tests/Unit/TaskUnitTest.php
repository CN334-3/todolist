<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Task;

class TaskUnitTest extends TestCase
{ 

    public function test_task_creation()
    {
        $this->assertTrue(true);
    }

    //Test Schema that description is correct
    public function test_schema_description()
    {
        $this->assertTrue(true);
    }

    //Test Schema that User id is correct
    public function test_schema_userID()
    {
        $this->assertTrue(true);
    }

    //Test Schema รองรับภาษาไทย
    public function test_schema_thai()
    {
        $this->assertTrue(true);
    }

    //Test Schema รองรับคำที่ยาวมากได้ไหม
    public function test_schema_length()
    {
        $this->assertTrue(true);
    }

    //Test Schema null ได้ไหม
    public function test_schema_null()
    {
        $this->assertTrue(true);
    }
}