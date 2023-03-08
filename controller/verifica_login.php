<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: adm.php');
	exit();
}
