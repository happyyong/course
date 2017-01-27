<?php

class M_course extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function addCourse($name,$deatil,$type,$limit,$credit,$day,$session){
        $code = generateCode(5);

        $data = array(
            "course_code" => $code,
            "course_name" => $name,
            "course_detail" => $deatil,
            "course_credit" => $credit,
            "course_day" => $day,
            "course_type" => $type,
            "course_limit" => $limit,
            "course_status" => 0,
            "course_date" => date("Y-m-d"),
            "member_id" => $session
        );

        $this->db->insert("tb_course",$data);

        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function  editCourse($id,$name,$deatil,$credit,$day){
        $data = array(
            "course_name" => $name,
            "course_credit" => $credit,
            "course_day" => $day,
            "course_detail" => $deatil
        );

        $this->db->where("course_id",$id);
        $this->db->update("tb_course",$data);

        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function deleteCourse($id){
        $this->db->where('course_id', $id);
        $this->db->delete('tb_course');

        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function listStudyCourse(){
        echo "เพิ่มลงฐานข้อมูล tb_study";
    }

    public function listStudent(){
        echo "เรียกฐานข้อมูล tb_study";
    }
}