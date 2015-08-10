<?php
function logMessage($logLevel, $message)
{
    $fileNameDate = date("Y-m-d", time());
    $filename = 'log-' . $fileNameDate . '.log';
    $handle = fopen($filename, 'a');
  	$date = date("Y-m-d H-i-s", time());

  	fwrite($handle, $date . " " . $logLevel . ", " . $message . PHP_EOL);
    fclose($handle);
}

function logInfo($message)
{
	return logMessage("INFO", $message);
}
logInfo("Adlister");

function logError()
{
	return logMessage("ERROR", $message);
}
logError("Nah Mister.");
