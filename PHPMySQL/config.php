<?php
/**
 * Created by PhpStorm.
 * User: Shehla
 * Date: 18-Apr-19
 * Time: 21:26
 */
//define('DBHOST', 'localhost');
//define('DBNAME', 'testdb');
//define('DBUSER', 'root');
//define('DBPASSWORD', '');

$connString = "mysql:host=localhost;dbname=universitydb";
$user = "root";
$pass = "";
$pdo = new PDO($connString,$user,$pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// TODO: Rename this file as StudentClass.php
// TODO: Move common configurations in config.php

class Student {
    private $id, $Name, $RegNo;
    private $pdo;
    public function __construct()
    {
        // TODO: Define connection string to config.php
        $connString = "mysql:host=localhost;dbname=universitydb";
        $user = "root";
        $pass = "";
        $this->pdo = new PDO($connString,$user,$pass);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function InsertStudent($StudentName, $RegistrationNo) {
        $sql = "INSERT INTO student (Name, RegNo) VALUES ('$StudentName', '$RegistrationNo')";
        if($this->pdo->exec($sql))
            return true;
        else
        {
            return $this->pdo->errorInfo();
        }
    }

    public function UpdateStudent($id, $StudentName, $RegistrationNo) {
        // TODO: Write Definition of this method
    }

    /*
     * This function returns Student objects Array
     */
    public function GetAllStudent() {
        // TODO: Write definition of this method
    }

    /*
     * This function returns single Student Object
     * Search Criteria: Registration Number
     */
    public function GetStudent($RegNo) {
        // TODO: Write definition of this method
    }

    /*
     * Delete single Student
     */
    public function DeleteStudent($id) {
        // TODO: Write Definition of this method
    }
}

?>