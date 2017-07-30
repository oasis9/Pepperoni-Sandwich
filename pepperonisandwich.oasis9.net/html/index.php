<?php
	error_reporting(E_ALL);
	require_once("auth.php");
	if (!$login)
		require_once("../resources/signin.php");
	else
		require_once("../resources/panel.php");
?>
