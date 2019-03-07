<?php
Class MY_Controller extends CI_Controller
{
    //tạo biến data để gửi dữ liệu sang view
    public $data=array();
    function __construct()
    {
        //kế thừa từ CI_Controller
        parent::__construct();

        $controller =$this->uri->segment(1); //in ra phân đoạn trên url 
        // echo $controller ."<br/>"; //in ra Login
        switch($controller)
        {
            case 'admin':
            {
                //xử lý các dữ liệu khi truy cập vào admin
                $this->_check_login();
                
                break;
            }
            default:
            {

            }
        }
    }
    /*Kiểm tra trạng thái đăng nhập admin */
    private function _check_login()
    {

    }
}
?>