<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page'] = "page/home";
        $data['active'] = 1;
        $this->load->view('template',$data);
    }




}
