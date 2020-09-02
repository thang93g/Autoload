<?php


namespace App\Model;

class StudentManager
{
    protected $databaseStudent;
    public function __construct()
    {
        $this->databaseStudent = new DBconnect();
    }

    public function getAll()
    {

        $sql = "SELECT * FROM students";
        $stmt = $this->databaseStudent->connectDB()->query($sql);
        $students = $stmt->fetchAll();
        $arr = [];
        foreach ($students as $key=>$item){
            $student = new Student($item["name"],$item["age"],$item["image"]);
            $student->setId($item["id"]);
            array_push($arr,$student);
        }
        return $arr;
    }

    function add($student){
        $sql = "INSERT INTO `students`(`name`, `age`, `image`) VALUES (:name,:age,:image)";
        $stmt = $this->databaseStudent->connectDB()->prepare($sql);
        $stmt->bindParam(':name',$student->getName());
        $stmt->bindParam(':age',$student->getAge());
        $stmt->bindParam(':image',$student->getImage());
        $stmt->execute();
    }

}