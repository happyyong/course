<?php

class M_login extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function check_login($username, $password)
    {
        $this->db->where('member_username', $username);
        $this->db->where('member_password', $password);

        $result = $this->db->get('tb_member');
        $check = $result->num_rows();
        if ($check) {
            $row = $result->row_array();
            $this->session->set_userdata("member_id", $row['member_id']);
            $this->session->set_userdata("member_name", $row['member_name']);
            $this->session->set_userdata("member_lastname", $row['member_lastname']);
            $this->session->set_userdata("member_status", $row['member_status']);
            return true;
        } else {
            return false;
        }
    }

    public function addUser($name, $lastname, $username, $password, $status)
    {

        $data = array(
            "member_name" => $name,
            "member_lastname" => $lastname,
            "member_username" => $username,
            "member_password" => $password,
            "member_status" => $status
        );

        $this->db->insert("tb_member", $data);

        return ($this->db->affected_rows() != 1) ? false : true;


    }
}