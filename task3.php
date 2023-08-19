<?php
require_once 'Task-2/filelog.php';
require_once 'Task-3/employee.php';
date_default_timezone_set('Asia/Dhaka');

$userIP = $_SERVER['REMOTE_ADDR'];
$now = date('Y-m-d H:i:s');
$request_type = 'GET';
$message = "Get request to Task-3 page";

$fileLog = new FileLog('log');
$fileLog->createFile();
$fileLog->loging($now, $userIP, $request_type, $message);

$employees = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $salary = $_POST['salary'];

    $employees[] = new Employee($id, $name, $salary);

    //Logging [Task-1 POST Request]
    date_default_timezone_set('Asia/Dhaka');
    $userIP = $_SERVER['REMOTE_ADDR'];
    $now = date('Y-m-d H:i:s');
    $request_type = 'POST';
    $message = $name ."employee added";

    $fileLog = new FileLog('log');
    $fileLog->createFile();
    $fileLog->loging($now, $userIP, $request_type, $message);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-3</title>
</head>

<body>
    <h1>Task-3</h1>
    <hr>
    <h3>Employee List</h3>
    <ul>
        <?php
        foreach ($employees as $employee) {
        ?>
           <li><?php echo "ID: " . $employee->getId() . ", Name: " .  $employee->getName() .", Salary: " .  $employee->getSalary() . "\n";?></li> 
        <?php
        }
        ?>
    </ul>
    <hr>
    <div>
        <h3>Add Employee</h3>
        <form name="form" action="" method="post">
            <label>ID</label>
            <input type="number" name="id" value="0" placeholder="ID">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name">
            <label>Salary</label>
            <input type="number" name="salary" value="0" placeholder="Salary">
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>