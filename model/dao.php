<?php
include 'dbconnect.php';
class dao extends dbconnect {
    private $conn;
    public function __construct() {
        $dbcon = new parent();
        // this is not needed in your case
        // you can use $this->conn = $this->connect(); without calling parent()
        $this->conn = $dbcon->connect();
    }

    public function select($tablename){
        $sql = "SELECT * FROM $tablename";
        $sele = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
        return $sele;
    }

    public function insert_into($fname, $lname, $email, $pass){
        $sql2 = "INSERT INTO myGuests(firstname, lastname, email, password) VALUES ('$fname','$lname','$email','$pass')";
        $insert = mysqli_query($this->conn,$sql2) or die(mysqli_error($this->conn));
        return $insert;
    }

    public function query($sql){
        $a_sele = mysqli_query($this->conn,$sql) or die(mysqli_error($this->conn));
        return $a_sele;
    }

    public function writepost($tablename,$post, $id, $date){
        $sql3 = "INSERT INTO $tablename(article,user_fk,date_posted) VALUES ('$post', '$id','$date')";
        $result = mysqli_query($this->conn,$sql3) or die(mysqli_error($this->conn));
        return $result;
    }
}
?>