<?php

class App {

    protected $controller = "Home";
    protected $method = "index";
    protected $params = [];
    

    public function __construct(){
        $url = $this->ParseUrl();
        
        

        /*  Cek jika controller ada */
        if(file_exists('../app/controllers/'.ucfirst($url[0]).'.php')){
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        
        }
        else{
            // $this->controller = "url_err";
        }

        require_once('../app/controllers/'.$this->controller . '.php');

        $this->controller = new $this->controller;
        
        /* 
        :METHOD

        https://www.example.com/public/<Controller>/<Method>
        
        */

       if(isset($url[1])){
           if(method_exists($this->controller,$url[1])){
               $this->method = $url[1];
               unset($url[1]);
               
           }
       }

        /* 
        
        :PARAMS

        parameters will be store in array[]

        https://www.example.com/public/<Controller>/<Method>/<PARAMS>

        
        */

        if(!empty($url)){
            $this->params = array_values($url);
            
        }
        
        
        /*
        
        jalankan controller dan method ,dan kirimkan data jika ada
        
        */

        call_user_func_array([$this->controller,$this->method],$this->params);
        
    }

    /* Fungsi ini bertujuan untuk mengambil path url */
    public function ParseUrl(){

        if(isset($_GET['url'])){

            $url = rtrim($_GET['url']);
            $url = filter_var($url,FILTER_SANITIZE_URL);

            $url = explode("/",$url);

            return $url;
        }

    }
}

?>