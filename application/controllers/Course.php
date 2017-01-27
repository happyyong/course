<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_course");
    }

    public function index()
    {
        $data['active'] = 3;
        $data['page'] = "page/course_manage";
        $this->load->view('template',$data);
    }

    public function addCoursePage(){
        $data['active'] = 3;
        $data['page'] = "page/course_form_add";
        $this->load->view('template',$data);
    }

    public function addCourse(){
        extract($_POST);
        $session = $this->session->userdata("member_id");
        $result = $this->m_course->addCourse($name,$deatil,$type,$limit,$credit,$day,$session);

        if($result){
            $url = base_url()."course/index";
            echo "<meta charset='utf-8'/><script>alert('บันทึกสำเร็จ!!');location.href='{$url}';</script>";
        }else{
            $url = base_url()."course/addCoursePage";
            echo "<meta charset='utf-8'/><script>alert('เกิดข้อผิดพลาด กรุณาลงข้อมูลอีกครั้ง!!');location.href='{$url}';</script>";
        }
    }

    public function editCoursePage($id){
        $this->db->where("course_id",$id);
        $result = $this->db->get("tb_course")->row_array();
        $data['row'] = $result;
        $data['active'] = 3;
        $data['page'] = "page/course_form_edit";
        $this->load->view('template',$data);
    }

    public function editCourse(){
        extract($_POST);

        $result = $this->m_course->editCourse($id,$name,$deatil,$credit,$day);

        if($result){
            $url = base_url()."course/index";
            echo "<meta charset='utf-8'/><script>alert('แก้ไขสำเร็จ!!');location.href='{$url}';</script>";
        }else{
            $url = base_url()."course/index";
            echo "<meta charset='utf-8'/><script>alert('เกิดข้อผิดพลาด กรุณาลงข้อมูลอีกครั้ง!!');location.href='{$url}';</script>";
        }
    }

    public function deleteCourse($id){

        $result = $this->m_course->deleteCourse($id);

        if($result){
            $url = base_url()."course/index";
            echo "<meta charset='utf-8'/><script>alert('ลบสำเร็จ!!');location.href='{$url}';</script>";
        }else{
            $url = base_url()."course/index";
            echo "<meta charset='utf-8'/><script>alert('เกิดข้อผิดพลาด กรุณาลงข้อมูลอีกครั้ง!!');location.href='{$url}';</script>";
        }

    }

    public function getCourseByJson()
    {
        $this->db->where("member_id",$this->session->userdata("member_id"));
        $result = $this->db->get("tb_course")->result_array();


        foreach ($result as $key => $row) {
            $result[$key]['course_type'] = course_status($row['course_type']);
            $result[$key]['course_date'] = date_en($row['course_date']);

            $url = base_url()."course/editCoursePage/{$row['course_id']}";
            $url2 = base_url()."course/deleteCourse/{$row['course_id']}";
            $url3 = base_url()."course/closeCourse/{$row['course_id']}";

            $result[$key]['close'] = "<a href='{$url3}' onclick='return confirm(\"หากปิดไปไม่จะไม่สามารถเปิดได้อีก?\");'><button type='button' class='btn btn-xs btn-primary btn-rounded'>ปิดการรับสมัคร</button></a>";

            $result[$key]['action'] = "<a href='{$url}'><button type='button' class='btn btn-xs btn-warning btn-rounded'>แก้ไข</button></a> <a onclick='return confirm(\"ต้องการลบข้อมูลนี้?\");' href='{$url2}'><button type='button' class='btn btn-danger btn-xs btn-rounded'>ลบ</button></a>";
        }

        echo json_encode($result,JSON_NUMERIC_CHECK);
    }

    public function listStudyCourse(){
        echo "รายการ การลงทะเบียนเรียน ไปดึงข้อมูลจาก m_course";
    }

    public function listStudent(){
        echo "รายการ นักเรียนที่ลงทะเบียนเรียน ไปดึงข้อมูลจาก m_course";
    }

}
