<?php

/*
 * Project RPi Turret
 *
 * PHP file for testing LED activation in a web browser : pinOff.php
 * @author GL
 * 2016-02-21
 */

	system ("gpio -g mode ".$_GET['led']." out");
	system ("gpio -g write ".$_GET['led']." 0");
?>
