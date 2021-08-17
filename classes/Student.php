<?php
include "DB.php";
class Student{

    private $table = 'tbl_student';
    //create data
    private $name;
    private $dept;
    private $age;

    //create data
    public function setName($n){
        $this->name = $n;
    }
    
    public function setDept($d){
        $this->dept = $d;
    }

    public function setAge($a){
        $this->age = $a;
    }

    public function insertData(){

        $sql = "INSERT INTO $this->table(name, dep, age) VALUES (:name, :dept, :age)";
        $stmt = DB::prepareOwn($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':dept', $this->dept);
        $stmt->bindParam(':age', $this->age);
        return $stmt->execute();
    }

    public function readAll(){

        $sql = "SELECT * FROM $this->table";

        $stmt = DB::prepareOwn($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }


}


?>