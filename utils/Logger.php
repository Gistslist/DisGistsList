<?php

class Log {

function logMessage($logLevel, $message)
{
    $fileNameDate = date("Y-m-d", time());
    $filename = 'log-' . $fileNameDate . '.log';
    $handle = fopen($filename, 'a');
  	$date = date("Y-m-d H-i-s", time());
    $message = "what the?";

  	fwrite($handle, $date . " " . $logLevel . ", " . $message . PHP_EOL);
    fclose($handle);
}

function logInfo($message)
{
	return logMessage("INFO", $message);
}


function logError($message)
{
	//logMessage("ERROR", $message);
}
}
