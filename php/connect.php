
		<?php
			function connToServ()
			{
				$dbs = "mysql.2freehosting.com";
				$dbu = "u102402585_benz";
				$dbp = "asdf1234";
				$dbn = "u102402585_monopoly";
				$conn = mysqli_connect($dbs,$dbu,$dbp,$dbn);
				return $conn;
			}
		?>
