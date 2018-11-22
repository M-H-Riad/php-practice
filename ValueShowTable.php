<!DOCTYPE html>
<html>
<head>
	<title>value in table</title>
</head>
<body>

	<?php
		echo "Salary list of Mr A,B,C ";
		$a='12000';
		$b='15000';
		$c='22000';
		echo "<table border=1>";
			echo "<tr>";
				echo "<td>";
					echo "The salary of Mr A is : ";
				echo "</td>";
				echo "<td>";
					echo  $a;
				echo "</td>";
			echo "</tr>";

			echo	"<tr>";
				echo "<td>";
					echo "The salary of Mr B is : ";
				echo "</td>";
				echo "<td>";
					echo  $b;
				echo "</td>";
			echo "</tr>";

			echo	"<tr>";
				echo "<td>";
					echo "The salary of Mr C is : ";
				echo "</td>";
				echo "<td>";
					echo  $c;
				echo "</td>";
			echo "</tr>";

		echo "</table>";



		//To read any type of files...

		$fileName = file('practice1.php');
		foreach ($fileName as $lineNum => $value) {
			echo "line $lineNum". htmlspecialchars($value)."<br>";
		}


	?>

</body>
</html>