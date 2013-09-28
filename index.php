<!DOCTYPE html>

<html>
	<head>
	<meta charset="UTF-8">
	<title>raffle v2</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<?php
		require_once('logic.php');
	?>
	</head>

	<body>
		<h1> Raffle V2 </h1>
	
		<form method='POST' action='index.php'>
			Enter 4 contestants<br>
			<input type='text' size= 30 name='contestant1' 
				value= <?php echo $_POST["contestant1"] ?>> <br>
			<input type='text' size= 30 name='contestant2'
				value= <?php echo $_POST["contestant2"] ?>> <br>
			<input type='text' size= 30 name='contestant3'
				value= <?php echo $_POST["contestant3"] ?>> <br>
			<input type='text' size= 30 name='contestant4'
				value= <?php echo $_POST["contestant4"] ?>> <br>
			<input type='submit' value='Pick a winner!'><br>
		</form>
		</br></br>

	
		The winning number is <?php echo $winning_num ?>
		</br>
			
		<?php	
		foreach ($players as $key => $value) {
			echo $key." "
		?>
			is a <?php echo " ".$value ?> </br>
		<?php } ?>	
		</br>
		<?php echo $message ?>

	</body>
</html>