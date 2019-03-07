<?php
Class Admin extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');//load từ model/Admin_model.php
    }
    function create()
    {
        $data=array();
        $data['username']='admin2';
        $data['password']='admin2';
        $data['name']='Admin Đức';
        if($this->Admin_model->create($data))
        {
            echo 'Thêm thành công';
        }else{
            echo "Not";
        }
    }
    function update()
    {
        $id='8';
        $data=array();
        $data['username']='admin3';
        $data['password']='admin3';
        $data['name']='Admin Nam';
        if($this->Admin_model->update($id,$data))
        {
            echo "Cập nhật thành công!";
        }else
        {
            echo "Cập nhật không thành công!";
        }
    }
    function delete()
    {
        $id='10';
        if($this->Admin_model->delete($id))
        {
            echo "Xóa thành công";
        }else
        {
            echo "Xóa không thành công";
        }
    }
    function get_info()
    {
        $id='8';
        $info=$this->Admin_model->get_info($id,'username,password'); //xuất tất ả thông tin admin gồm username và password
        echo '<pre>';
        print_r($info);
    }
    function get_list()
    {
        $input=array();
        // $input['where']=array('id'=>11); //xuất admin có id =11
        $input['order']=array("id","asc"); //xuất danh sách tăng/giảm theo id 
        $list=$this->Admin_model->get_list($input);
        echo '<pre>';
        print_r($list);
    }
}