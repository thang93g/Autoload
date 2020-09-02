<?php
namespace App\Controller;

use App\Model\Student;
use App\Model\StudentManager;

class StudentController
{
    protected $studentManager;

    public function __construct()
    {
        $this->studentManager = new StudentManager();
    }

    public function getAll()
    {
        $students = $this->studentManager->getAll();
        include_once "src/View/list.php";
    }

    function addStudent(){
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            include_once 'src/View/add.php';
        } else {
            $file = $_FILES['image-file']['tmp_name'];
            $path = "uploads/" . $_FILES['image-file']['name'];
            if (move_uploaded_file($file, $path))
                echo 'Success upload file';
            else echo 'Fail to upload file';

            $name = $_REQUEST['name'];
            $age = $_REQUEST['age'];

            $student = new Student($name,$age,$path);
            $this->studentManager->add($student);
            header('location:index.php?page=list-student');
        }
    }
}