<?php
require_once 'Task-2/filelog.php';
require_once 'Task-4/animal.php';
require_once 'Task-4/cat.php';
require_once 'Task-4/goat.php';
date_default_timezone_set('Asia/Dhaka');

$userIP = $_SERVER['REMOTE_ADDR'];
$now = date('Y-m-d H:i:s');
$request_type = 'GET';
$message = "Get request to Task-4 page";

$fileLog = new FileLog('log');
$fileLog->createFile();
$fileLog->loging($now, $userIP, $request_type, $message);

$animals = array();

$cat1 = new Cat("Hello Kity");
$cat2 = new Cat("Tom");
$goat1 = new Goat("Bahadur");

$animals = [$cat1,$cat2, $goat1];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-4</title>
</head>

<body>
    <?php
    foreach ($animals as $animal) {
    ?>
    <p><?php echo $animal->getName() . " doing " . $animal->sound(); ?></p>
    <?php
    }
    ?>
</body>

</html>