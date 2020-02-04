<?php

class MyLogger {

    private $origin;

    public function __construct($origin)
    {
        if (!empty($origin)) {
            $this->origin = $origin;
        } else {
            echo "Invalid origin" . PHP_EOL;
            exit;
        }
    }

    public function log($message, $type)
    {
        echo $this->logWithTime() . $type . ": " . $message . PHP_EOL;
    }

    public function warning($message)
    {
        echo $this->logWithTime() . $this->origin . " - WARNING: " . $message . PHP_EOL;
    }

    public function info($message)
    {
        echo $this->logWithTime() . $this->origin . " - INFO: " . $message . PHP_EOL;
    }

    public function error($message)
    {
        echo $this->logWithTime() . $this->origin . " - ERROR: " . $message . PHP_EOL;
    }

    public function debug($message)
    {
        echo $this->logWithTime() . $this->origin . " - DEBUG: " . $message . PHP_EOL;
    }

    private function logWithTime()
    {
        return "[" . date('m/d/Y h:i:s', time()) . "] ";
    }

}

$logger = new MyLogger('TestClass');
$logger->error('dit is een error');