<?php

class HomeModel{
    
    public function GetDanhSachSinhVien(){
        return "Phan Ngo Tuan Kiet";
    }

    public function GetThongTinSinhVien($idSinhVien){
        return "Sinh vien: $idSinhVien";
    }


}