<?php

session_start();


echo "<pre>";

echo $_SESSION['i'];

$_SESSION['i']++;

echo "</pre>";

?>


