<?php 

abstract class DBSql{

    private $host = "localhost";
    private $userName = "root";
    private $pass = "";
    private $dbName = "testMVC";
    protected $conn = "";

    public function __construct(){
        $this->conn = mysqli_connect($this->host, $this->userName, $this->pass, $this->dbName); // ket noi database
        mysqli_query($this->conn, "SET NAMES 'utf-8' "); 
    }

    public function SelectAll($tableName){
        $sql = "SELECT * FROM `sinhvien` ";
        $res = $this->conn->query($sql);
        return $res->fetch_assoc();
    }

    public function Delete($tableName, $id){

    }

    public function Update($tableName, $id, $dataUpdate){

    }

    public function Insert($tableName, $dataInsert){

    }

    public function Query($query){

    }

}