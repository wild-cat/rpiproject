<?php
session_start();

system ("gpio -1 pwm ".$_SESSION['servoPinCont']." 73");
 
?>