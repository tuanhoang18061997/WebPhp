<?php
Class Login extends MY_Controller //kế thừa MY_Controller vì MY_Controller đã kế thừa CI_Controller 
{
    function index()
    {
        $this->load->view('admin/login/index');
    }
}