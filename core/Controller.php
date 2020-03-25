<?php 

abstract class Controller{

    private $modelUrl = "./mvc/models/";
    private $viewUrl = "./mvc/views/";

    public function loadModel($modelName){

        // kiem tra model co ton tai hay khong
        if(file_exists($this->modelUrl.$modelName.".php")){
            require_once $this->modelUrl.$modelName.".php";
            return new $modelName;
        }


    }

    public function loadView($viewName){

    }

}


?>