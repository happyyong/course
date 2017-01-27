<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UnitTest extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_login");
        $this->load->model("m_course");
        $this->load->library('unit_test');
    }

    public function testLogin($case = 0)
    {
        if ($case == 1) {
            $_POST['username'] = "admin";
            $_POST['password'] = "1234";
        } elseif ($case == 2) {
            $_POST['username'] = "admin";
            $_POST['password'] = "abcd";
        } elseif ($case == 3) {
            $_POST['username'] = "adddd";
            $_POST['password'] = "1234";
        } elseif ($case == 4) {
            $_POST['username'] = "adddd";
            $_POST['password'] = "abcd";
        } else {
            $_POST['username'] = null;
            $_POST['password'] = null;
        }

        extract($_POST);

        $this->showData($_POST);

        $result = $this->m_login->check_login($username, $password);

        $this->unit->run($result, 'is_true', 'Login', "Sys w p msg");

        echo $this->unit->report();
    }

    public function testRegister($case = 0)
    {
        if ($case == 1) {
            $_POST['name'] = "kant";
            $_POST['lastname'] = "singsri";
            $_POST['username'] = "test2232";
            $_POST['password'] = "1234";
            $_POST['status'] = "1";
        } else {
            $_POST['name'] = null;
            $_POST['lastname'] = null;
            $_POST['username'] = null;
            $_POST['password'] = null;
            $_POST['status'] = null;
        }

        extract($_POST);

        $this->showData($_POST);

        $result = $this->m_login->addUser($name, $lastname, $username, $password, $status);


        $this->unit->run($result, 'is_true', 'test 1', "msg 1");

        $this->db->order_by("member_id", "DESC");
        $result = $this->db->get("tb_member")->row_array();

        echo $this->unit->report();

        if ($result) {
            $this->showData($result);
        }

    }

    public function testAddCouse($case = 0)
    {
        if ($case == 1) {
            $_POST['name'] = "SE101";
            $_POST['detail'] = "zzzzz";
            $_POST['type'] = "1";
            $_POST['limit'] = "-";
            $_POST['credit'] = "10";
            $_POST['day'] = "08/09/16";
            $_POST['session'] = "1";
        } else {
            $_POST['name'] = null;
            $_POST['detail'] = null;
            $_POST['type'] = null;
            $_POST['limit'] = null;
            $_POST['credit'] = null;
            $_POST['day'] = null;
            $_POST['session'] = null;
        }

        extract($_POST);

        $this->showData($_POST);

        $result = $this->m_course->addCourse($name, $detail, $type, $limit, $credit, $day, $session);


        $this->unit->run($result, 'is_true', 'test 1', "msg 1");

        $this->db->order_by("member_id", "DESC");
        $result = $this->db->get("tb_course")->row_array();

        echo $this->unit->report();

        if ($result) {
            $this->showData($result);
        }


    }

    public function testEditCouse($id = 0)
    {
        $_POST['id'] = $id;
        $_POST['name'] = "SE101ii";
        $_POST['detail'] = "zzzzz";
        $_POST['credit'] = "10";
        $_POST['day'] = "08/09/16";


        extract($_POST);

        $this->showData($_POST);

        $this->db->where("course_id", $id);
        $old = $this->db->get("tb_course")->row_array();

        $this->showData($old);

        $result = $this->m_course->editCourse($id, $name, $detail, $credit, $day);

        $this->unit->run($result, 'is_true', 'test 1', "msg 1");

        $this->db->where("course_id", $id);
        $result = $this->db->get("tb_course")->row_array();

        echo $this->unit->report();

        if ($result) {
            $this->showData($result);
        }


    }

    public function testDeleteCourse($id = 1)
    {

        $this->db->where("course_id", $id);
        $old = $this->db->get("tb_course")->row_array();

        $this->showData($old);

        $result = $this->m_course->deleteCourse($id);

        $this->unit->run($result, 'is_true', 'test 1', "msg 1");

        $this->db->where("course_id", $id);
        $result = $this->db->get("tb_course")->row_array();

        $this->showData($result);

        echo $this->unit->report();

    }

    public function showData($arr)
    {
        echo '<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />';
        echo '<pre>';
        print_r($arr);
        echo '<pre>';
    }


}
