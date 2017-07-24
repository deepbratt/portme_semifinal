<?php
		$mysqli = new mysqli("localhost", "root", "", "portme");
		//$mysql = new mysqli("localhost","deepbratt","Samadder5#","");
		if ($mysqli->connect_errno) {
			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		SESSION_START();
		ERROR_REPORTING(0);
?>