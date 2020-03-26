<?php 

abstract class DBSql{

    private $host = "localhost";
    private $userName = "root";
    private $pass = "";
    private $dbName = "testMVC";
    protected $conn = "";

    public function __construct(){
        $this->conn = new mysqli($this->host, $this->userName, $this->pass, $this->dbName); // ket noi database
        mysqli_query($this->conn, "SET NAMES 'utf-8' "); 
    }

    public function SelectAll($tableName){

        $sql = "SELECT * FROM `sinhvien` ";
        $res = $this->conn->Query($sql);

        $dataOutput = [];

        while($rows = $res->fetch_assoc()){
            array_push($dataOutput,$rows);
        }

        return $dataOutput;

    }

    public function Delete($tableName, $id){

        $sql = "DELETE FROM {$tableName} Where `id` = {$id}";
        $res = $this->conn->Query($sql);

        if($res){
            return true;
        }

        return false; 
    }

    public function Update($tableName, $id, $dataUpdate){

    }

    public function Insert($tableName, $dataInsert){
        
    }

    public function Select($tableName, $fieldList){
        //["id","hoTen"] => `id`,`hoTen`

    }

}