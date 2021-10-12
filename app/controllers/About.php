<?php
class about extends Controller{

    public function index()
    {
        $data = ['title'=>"About Page",'nav_status'=>['page_about'=>'active']];
        $this->view("templates/header",$data);
        $this->view("about/index");
        $this->view("templates/footer");
    }

    public function page()
    {
        $this->view("templates/header");
        $this->view("about/page");
        $this->view("templates/footer");

    }
}