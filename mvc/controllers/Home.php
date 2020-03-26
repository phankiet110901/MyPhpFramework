<?php 

class Home extends Controller{

    function Test(){
        echo "test";
    }

    function Show(){
        $model = $this->loadModel("HomeModel");
        echo "CONTROLLER-HOME <br/>";
        echo $model->GetDanhSachSinhVien();
    }

    function Sum($soThuNhat, $soThuHai){
        echo $soThuNhat + $soThuHai;
    }

    function ShowSinhVien($idSinhVien){
        $modelSinhVien = $this->loadModel("HomeModel"); // load model Home
        $res = $modelSinhVien->GetThongTinSinhVien($idSinhVien); // hung ket qua lay duoc tu model 
        //echo $res;
        $this->loadView("HomeView",["infoSinhVien"=>$res]);
    }

}

?>
