<!DOCTYPE html>

<html>
	<head>
		<title>Shayan NasrAbadi's Practice</title>
	</head>

	<body>
		<?php
			$number = 1234;
			$numberString = $number . "";
			$nums = strlen($numberString);
			$result = 1

			for($i = 0; $i < count($nums); $i++){
				$result *= $nums[$i];
			}

			echo "Result is : " . $result;
		?>
	</body>
</html>
