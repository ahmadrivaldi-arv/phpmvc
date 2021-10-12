<?php


class Login extends Controller{

    public function index()
    {

        $data_params = [ 'title'=>'Login',
            'nav_status'=>[
                "page_login"=>"active"
            ]            
        ];
        $this->view("templates/header",$data_params);
        $this->view("login/index");
        $this->view("templates/footer");
    }

    public function validate()
    {
        if($this->model("User_model")->getUser($_POST) > 0)
        {
            FlasherMessage::setMessage("Login Berhasil","Success","success");
            header('location:'. BASE_URL ."/login");
            exit;
        }else
        {
            FlasherMessage::setMessage("Gagal","login gagal","danger");
            
            header('location:'. BASE_URL ."/login");
            exit;
        }
    }
}