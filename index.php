<?php
require_once 'Task-2/filelog.php';


date_default_timezone_set('Asia/Dhaka');
$userIP = $_SERVER['REMOTE_ADDR'];
$now = date('Y-m-d H:i:s');
$request_type = 'GET';
$message = "Get request to Index page";

$fileLog = new FileLog('log');
$fileLog->createFile();
$fileLog->loging($now,$userIP, $request_type, $message);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1-4</title>
</head>
<body>
    <ul>
        <li><a href="task1.php">Task-1</a></li>
        <li><a href="task2.php">Task-2</a></li>
        <li><a href="task3.php">Task-3</a></li>
        <li><a href="task4.php">Task-4</a></li>
    </ul>   
</body>
</html>