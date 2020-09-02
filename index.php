<?php

require __DIR__ . "/vendor/autoload.php";

$studentController = new \App\Controller\StudentController();

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
 ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
switch ($page){
    case "list-student":
        $studentController->getAll();
        break;
    case 'add-student':
        $studentController->addStudent();
        break;
    default:
        $studentController->getAll();
}
?>
</body>
</html>
