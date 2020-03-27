<?php 

// tat ca function cua core se duoc dinh nghia o day

function Show404Err(){

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