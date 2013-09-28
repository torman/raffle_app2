<?php

if ( isset($_POST)  ) {

	$players[$_POST["contestant1"]] = $_POST["contestant1"];
	$players[$_POST["contestant2"]] = $_POST["contestant2"];
	$players[$_POST["contestant3"]] = $_POST["contestant3"];
	$players[$_POST["contestant4"]] = $_POST["contestant4"];

	$winning_num = rand(1,4);
	$num_of_winner = 0;
	$name_of_winner = "";

	foreach ($players as $key => $value) {
		$num = rand(1,4);
		if ($num == $winning_num) {
			$status = "Winner :)";
			$num_of_winner += 1;
			# name of winner is only used when there is ONE single winner
			$name_of_winner = $key;
		} else {
			$status = "Loser :(";
		}
		$players[$key] = $status;
	}

	if ( $num_of_winner == 0 ) {
		$message = "No winners this round";
	} else if ( $num_of_winner == 1 ) {
		$message = "The single winner is $name_of_winner";
	} else {
		$message = "It's a tie!";
	}
	
	foreach ($players as $key => $value) {
		if ($value == "Winner :)") {
			$to = $key;
			$subject = 'Winner of raffle app2';
			$message = "Congratulation: You just won the game of raffle app2";
			$headers = 'From: webmaster@torman.us';
			mail($to, $subject, $message, $headers);
		}
	}
}
?>