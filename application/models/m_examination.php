<?php

class M_course extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function listQuestion()
    {
        echo "รายการข้อสอบแบบเดี่ยว";
    }


    public function addQuestion()
    {
        echo "เพิ่มข้อสอบ tb_exa..";
    }

    public function formEditQuestion()
    {
        echo "แก้ไขข้อสอบ tb_exa..";
    }

    public function editQuestion()
    {
        echo "แก้ไขข้อสอบ tb_exa..";
    }
    public function makeQuestion()
    {
        echo "ทำข้อสอบ โมลเดล tb_history";
    }



}
