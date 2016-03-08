<!DOCTYPE html>

<!--
	Project RPi Turret

	PHP file for testing LED activation with Python in a web browser : testPython.php

	2016-03-05

-->

<html>

	<head>
		<meta charset = "UTF-8">
		<title>Pi Test : Python</title>


	</head>

	<body>
		<!-- Replacement of the original code by simple PHP -->

		<?php

			echo "Test of command 'ls' :<br>";
			$testCommand = ls;
			exec($testCommand, $testOut, $testStatus);

			echo "$testOut<br>";
			$size = count($testOut);
			for ($i = 0; $i < $size; $i++)
			{
				echo "$i ";
				echo "$testOut[$i] <br>";
			}
			echo "Status = $testStatus<br><br>";

			$command2 = "sudo python /home/pi/testPins.py";
			echo "Test of command $command2 :<br>";
			exec($command2, $out2, $status2);

			echo "$out2<br>";
			$size2 = count($out2);
			for ($j = 0; $j < $size2; $j++)
			{
			        echo "$j ";
			        echo "$out2[$j] <br>";
			}
			echo "Status = $status2<br><br>";

		?>
	</body>

</html>
