<?php
	$success = mail(
		'cvp@mobilemyday.com', 
		'[MMD] test', 
		'Test' . '<br />' . '<pre>' . 'test2' . '</pre>', 
		'FROM: mobile my day <test@mobilemyday.com>' . "\n" . 'Content-Type: text/html; charset="utf-8"' . "\n" 
	);
if (!$success) {
    $errorMessage = error_get_last()['message'];
}
	echo("TEST");
?>