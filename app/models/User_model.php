<?php


class User_model{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getUser($data_params){
        
        $sql = "SELECT * FROM tbl_users where username = :username and password = :password";

        $this->db->query($sql);

        $this->db->bind('username',$data_params['username']);
        $this->db->bind('password',$data_params['password']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}