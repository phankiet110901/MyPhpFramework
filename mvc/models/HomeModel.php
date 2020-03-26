<?php

class HomeModel extends DBSql{
    
    public function GetDanhSachSinhVien(){
        return $this->Select("sinhvien",["hoTen"]);
    }

    public function Xoa($tableName,$id){
        return $this->Delete($tableName,$id);
    }




}