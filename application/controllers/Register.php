<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_course");
    }

    public function index($code = "")
    {
        if($code != ""){

        }else {
            $data['active'] = 3;
            $data['page'] = "page/course_register";
            $this->load->view('template', $data);
        }
    }

    public function addStudy()
    {
        echo "หน้าเพิ่มเข้าคอร์สเรียน ไปเพิ่มที่โมเดล m_register";
    }

    public function appoveStudy()
    {
        echo "อนุมัติการเรียนแบบเปิด";
    }


}
