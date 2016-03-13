<?php


session_start();

$action = 0;

if ($_POST['action'] == 'stop') {
	$action = 0;
} else if ($_POST['action'] == 'start') {
	$action = 1;
}

$cmd = "gpio -1 write ".$_SESSION['firePin']." ".$action;
system ($cmd);
echo "CMD: ".$cmd;


?>