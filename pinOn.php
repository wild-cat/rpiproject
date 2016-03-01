<?php

/*
 * Project RPi Turret
 *
 * PHP file for testing LED activation in a web browser : pinOn.php
 * @author GL
 * 2016-02-21
 */

	system ("gpio -g mode 4 out");
	system ("gpio -g write 4 1");
?>
