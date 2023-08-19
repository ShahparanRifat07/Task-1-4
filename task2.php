<?php
require_once 'Task-2/filelog.php';
date_default_timezone_set('Asia/Dhaka');

$userIP = $_SERVER['REMOTE_ADDR'];
$now = date('Y-m-d H:i:s');
$request_type = 'GET';
$message = "Get request to Task-2 page";

$fileLog = new FileLog('log');
$fileLog->createFile();
$fileLog->loging($now,$userIP, $request_type, $message);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-2</title>
</head>
<body>
    <h1>Check the log file in the root directory</h1>
</body>
</html>