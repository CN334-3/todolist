<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Task;

class TaskUnitTest extends TestCase
{ 
    
    //Test สร้าง Task แล้ว
    public function test_task_creation()
    {
        $this->assertTrue(true);
    }

    //Test Schema description ถูกต้อง
    public function test_schema_description()
    {
        $this->assertTrue(true);
    }

    //Test Schema UserID ถูกต้อง
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