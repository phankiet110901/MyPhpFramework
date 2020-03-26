<?php 

class Home extends Controller{

    function Test(){
        echo "test";
    }

    function Show(){
        $model = $this->loadModel("HomeModel"); // load model
        $data = [];
        $data = $model->GetDanhSachSinhVien();
        print_r($data);
    }


}

?>
