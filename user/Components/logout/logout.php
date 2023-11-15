<?php
session_start();
$_SESSION['variable_name_1'] = null;
$_SESSION['variable_name_2'] = null;
header('Location:../../index.php');

?>