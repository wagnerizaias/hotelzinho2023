<?php
session_start();
session_destroy();
header('Location: adm.php');
exit();