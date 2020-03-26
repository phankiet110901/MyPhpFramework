<?php

class HomeModel extends DBSql{
    
    public function GetDanhSachSinhVien(){
        return $this->SelectAll("sinhvien");
    }



}