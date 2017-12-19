<?php
// server should keep session data for AT LEAST 30 minute
ini_set('session.gc_maxlifetime', 1800);

// each client should remember their session id for EXACTLY 30 minute
session_set_cookie_params(1800);

session_start();

function isSignin() {
	return isset($_SESSION["logged_in"])?TRUE:FALSE;
}

function idUser() {
	return isset($_SESSION['id_user'])?TRUE:FALSE;
}

?>