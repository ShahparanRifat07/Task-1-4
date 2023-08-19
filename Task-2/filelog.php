<?php
require_once 'log.php';

class FileLog implements Log
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    public function createFile()
    {
        if (!file_exists($this->fileName)) {
            touch($_SERVER['DOCUMENT_ROOT'] . '/' . $this->fileName . '.txt');
        }
    }

    public function loging($time, $ip, $type, $message)
    {
        $log_msg = "Time:" . $time . " , IP Address: " . $ip . " , Request Type: ".$type. " , Message: " . $message . "\n";
        file_put_contents($this->fileName, $log_msg, FILE_APPEND);
    }
}
