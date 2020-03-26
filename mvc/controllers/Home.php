<?php 

class Home extends Controller{

    function Test(){
        echo "test";
    }

    function Show(){
        $model = $this->loadModel("HomeModel"); // load model

       $dataOutput = $model->GetDanhSachSinhVien(); // nhan data duoc tra ve tu model
       // hien thi data len view
       $this->loadView("HomeView",[
           "data" => $dataOutput
       ]);
        
    }



    function DeleteSV($tableName,$id){
        $model = $this->loadModel("HomeModel");
        $model->Xoa($tableName,$id); // xoa sinh vien 
        header('Location: http://localhost:8012/phpFramework');
    }


}

?>
