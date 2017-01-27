<?php

class Hooks_onload
{
    private $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function check_login()
    {
        $controller = $this->ci->router->class;
        $method = $this->ci->router->method;

        if($controller != "UnitTest"){
            if ($this->ci->session->userdata("member_id") == null) {
                if ($controller != "account") {
                    redirect('account', 'refresh');
                    exit();
                }

            } else {
                if ($controller == "account") {
                    if ($method != "logout") {
                        redirect('member', 'refresh');
                        exit();
                    }
                }
            }
        }


    }
}

?>