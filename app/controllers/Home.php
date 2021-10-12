<?php

class home extends Controller{

    public function index()
    {
        // $data_params = ["title"=>"Home Page"]; /*-comment here-*/
        $data_params = ['title'=>"Home",'nav_status'=>['page_home'=>'active']];
        
        $this->view("templates/header",$data_params);
        $this->view("home/index",$data_params);
        $this->view("templates/footer");
        
    }
}