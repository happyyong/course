<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Examination extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_course");
    }

    public function listQuestion()
    {
        echo "รายการข้อสอบ";
    }

    public function formAddQuestion()
    {
        echo "ฟรอมข้อสอบ";
    }

    public function addQuestion("คำถาม String" , "คำตอบที่ 1 String" , "คำตอบที่ 2 String" ,"คำตอบที่ 3 String" ,"คำตอบที่ 4 String" , "ข้อที่ถูก Int")
    {
        echo "เพิ่มข้อสอบ โมลเดล e_exam...";
    }

    public function formEditQuestion("รหัสคำถาม Int")
    {
        echo "ฟรอมข้อสอบ";
    }

    public function editQuestion("รหัสคำถาม Int","คำถาม String", "คำตอบที่ 1 String", "คำตอบที่ 2 String" ,"คำตอบที่ 3 String" ,"คำตอบที่ 4 String" , "ข้อที่ถูก String")
    {
        echo "แก้ไขข้อสอบ โมลเดล e_exam...";
    }

    public function makeQuestion("รหัสคำถาม Int","คำตอบทที่เลือก Int",member_id)
    {
        echo "ทำข้อสอบ โมลเดล e_exam...";
    }


}
