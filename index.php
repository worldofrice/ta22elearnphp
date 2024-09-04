<?php

class ConsoleLogger implements Logger {
    public function log($message){
        echo "$message\n";
    }
}

class Work {
    public function task(Logger $logger){
        for($i=0;$i<10;$i++){
            $logger->log($i);
        }
    }
}

interface Logger {
    public function log($message);
}


//

class NothingLogger implements Logger{
    public function log($message){
       
    }
}
$logger = new NothingLogger();
$work = new Work();
$work->task($logger);