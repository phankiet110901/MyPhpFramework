<?php 

// tat ca function cua core se duoc dinh nghia o day

function Show404Err(){
    echo "Loi: 404 (Khong tim thay trang)  !!!!!";
    die();
}

function ShowErr(){
    
}

function ShowErrNotFoundModel(){
    
}

function SetDefaultPage($namePage,$defaulAction, $defaulParam){
    if($namePage == ""){
        echo "Welcome to my php framework !!!";
    }else{
        $myApp = new App($namePage,$defaulAction,$defaulParam);
    }
}

function GetAllGlobalData(){
    global $globalData;
    return $globalData;
}

function GetGlobalData($dataName){
    global $globalData;
    return $globalData[$dataName];
}