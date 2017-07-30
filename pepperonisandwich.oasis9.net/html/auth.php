<?php
	if ($_SERVER["SERVER_NAME"] != "pepperonisandwich.oasis9.net") {
		header("Location: https://pepperonisandwich.oasis9.net");
		die;
	}
	ini_set('session.cookie_lifetime', 0);
	ini_set('session.gc_maxlifetime', PHP_INT_MAX);
	session_start();

	$ajax = basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]);

	$user = "sandwich";
	$pass = "pepperoni";

	$logincredentials = false;
	$action = isset($_POST['action']) ? $_POST['action'] : null;

	$loginsession = isset($_SESSION['login']) && $_SESSION['login'];
	if ($action == "login" || $ajax) {
		$_SESSION['name'] = $_POST['username'];
		$password = $_POST['password'];
		$logincredentials = $_SESSION['name'] == $user && $password == $pass;
	}

	$login = $logincredentials || $loginsession;
	if ($login) {
		$_SESSION['login'] = true;
		if (isset($action) || $ajax) {
			if ($action == "logout") {
				session_destroy();
				if ($ajax)
					http_response_code(200);
				else
					header("Location: /");
				die;
			} else if ($action == "connect") {
				if ($ajax)
					http_response_code(200);
				else
					header("Location: /");
				die;
			} else if ($action == "navigate") {
				if (!$ajax) {
					header("Location: /");
					die;
				}
				if (!isset($_POST["page"])) {
					require_once("../resources/pages/404.php");
					die;
				}
				$page = $_POST["page"] . ".php";
				$files = glob("../resources/pages/*.php", GLOB_BRACE);
				foreach ($files as $file)
  				if ($page == basename($file)) {
						require_once($file);
						die;
					}
				require_once("../resources/pages/404.php");
				die;
			} else if ($ajax)
				http_response_code(200);
			else
				header("Location: /");
			die;
		}
	} else if (isset($action)) {
		if ($ajax)
			http_response_code(403);
		else
			header("Location: /");
		die;
	} else if ($ajax) {
		http_response_code(403);
		die;
	}
	/*if (isset($action) && $action == 'login')
		header('Location: /' . ($login ? '' : '?i=l'));
	else if ($loginsession && (isset($id) && !$loginslack))
		header('Location: /?i=a');*/
?>
