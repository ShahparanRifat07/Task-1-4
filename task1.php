<?php
require_once 'Task-1/circle.php';
require_once 'Task-1/rectangle.php';
require_once 'Task-1/square.php';
require_once 'Task-2/filelog.php';

//Logging [Task-1 GET Request]
date_default_timezone_set('Asia/Dhaka');
$userIP = $_SERVER['REMOTE_ADDR'];
$now = date('Y-m-d H:i:s');
$request_type = 'GET';
$message = "Get request to Task-1 page";

$fileLog = new FileLog('log');
$fileLog->createFile();
$fileLog->loging($now,$userIP, $request_type, $message);



//Task-1
$circle_area = 0;
$rectangle_area = 0;
$squrae_area = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $radius = $_POST['radius'];
    $circle = new Circle($radius);
    $circle_area = $circle->area();

    $width = $_POST['width-r'];
    $length = $_POST['length-r'];
    $rectangle = new Rectangle($length, $width);
    $rectangle_area = $rectangle->area();

    $side = $_POST['width'];
    $square = new Square($side);
    $squrae_area = $square->area();

    //Logging [Task-1 POST Request]
    date_default_timezone_set('Asia/Dhaka');
    $userIP = $_SERVER['REMOTE_ADDR'];
    $now = date('Y-m-d H:i:s');
    $request_type = 'POST';
    $message = "POST request to Task-1 page to calcuate area";

    $fileLog = new FileLog('log');
    $fileLog->createFile();
    $fileLog->loging($now,$userIP, $request_type, $message);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>

<body>
    <h1>Task-1</h1>
    <hr>
    <div>
        <form name="form" action="" method="post">
            <label>Circle</label>
            <input type="number" name="radius" value="0" placeholder="radius">
            <p>Area : <?php echo $circle_area  ?></p>
            <br>
            <label>Retangle</label>
            <input type="number" name="length-r" value="0" placeholder="Length">
            <input type="number" name="width-r" value="0" placeholder="Width">
            <p>Area : <?php echo $rectangle_area  ?></p>
            <br>
            <label>Square</label>
            <input type="number" name="width" value="0" placeholder="Width">
            <p>Area : <?php echo $squrae_area  ?></p>
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>