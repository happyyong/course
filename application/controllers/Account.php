<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_login");
    }

    public function index()
    {
        $this->load->view('Login');
    }

    public function login(){
        extract($_POST);
        $result = $this->m_login->check_login($username,$password);

        if($result){
            $url = base_url()."member";
            $name = $this->session->userdata('member_name')." ".$this->session->userdata('member_lastname');
            echo "<meta charset='utf-8'/><script>alert('ยินดีต้องรับ คุณ{$name} เข้าสู่ระบบ!!');location.href='{$url}';</script>";
        }else{
            $url = base_url()."account";
            echo "<meta charset='utf-8'/><script>alert('ไม่พบข้อมูล!!');location.href='{$url}';</script>";
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        $url = base_url()."account";
        echo "<meta charset='utf-8'/><script>alert('ออกจากระบบสำเสร็จ!!');location.href='{$url}';</script>";
    }

    public function register_index()
    {
        $this->load->view('register');
    }

    public function register(){
        extract($_POST);
        $result = $this->m_login->addUser($name,$lastname,$username,$password,$status);

        if($result){
            $url = base_url()."account";
            echo "<meta charset='utf-8'/><script>alert('สมัครสมาชิกสำเร็จ เข้าสู่ระบบได้เลย!!');location.href='{$url}';</script>";
        }else{
            $url = base_url()."account/register_index";
            echo "<meta charset='utf-8'/><script>alert('เกิดข้อผิดพลาด Username นี้มีคนใช้แล้ว!!');location.href='{$url}';</script>";
        }

    }
}
