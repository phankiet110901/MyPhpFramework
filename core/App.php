<?php 

class App{
    
    protected $controller;
    protected $action;
    protected $param;

    protected $controllerUrl = "./mvc/controllers/";


    function __construct($defaultController, $defaultAction, $defaultParam){

        // gan cac tham so mac dinh
        $this->controller = $defaultController;
        $this->action = $defaultAction;
        $this->param = $defaultParam;

        $dataUrl = $this->UrlProcess();

        // Xu li controller
        if( file_exists($this->controllerUrl.$dataUrl[0].".php") ){
            $this->controller = $dataUrl[0];
        }
        require_once $this->controllerUrl.$this->controller.".php";

    }

    function UrlProcess(){
        // kiem tra url co duoc nhap day du hay khong
        if( isset($_GET["url"]) ){
           $url = filter_var(trim($_GET["url"])); // lam sach url
           return explode("/",filter_var(trim($_GET["url"]))); // tach gia tri

        }else{
            return [$this->controller,$this->action,$this->param];
        }
    }

}





?>