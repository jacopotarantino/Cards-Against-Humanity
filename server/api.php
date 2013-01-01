<?php
// set up database connection
// $db = new MySQL('root', 'root', 'CAH_database');

if ($_POST['init_session'] && $_POST['init_session'] == true) {
	echo "{"; // start JSON object
	
	$new_player_ID = 42;
	echo ("\"player_ID\":" . $new_player_ID . ",");
	
	$session_black_card = "\"I'm sorry Professor, but I couldn't complete my homework because of ________.\"";
	echo ("\"black_card_contents\":" . $session_black_card . ",");
	
	echo ("\"other_players_cards\": {\"p1\": \"A disappointing birthday party.\",\"p2\": \"A disappointing birthday party.\",\"p3\": \"A disappointing birthday party.\",\"p4\": \"A disappointing birthday party.\"}");
	
	echo "}"; //end JSON object
} // end of init_session


if ($_POST['submitting_card'] && $_POST['submitting_card'] == true) {
	// record the submitted card for their game in the database
	$user = $_POST['user_ID'];
	$game = $_POST['game_ID'];
	$card = $_POST['white_card_contents'];
} // end of submitting card


if ($_POST['judge_chose_card'] && $_POST['judge_chose_card'] == true) {
	// send out contents of card that won this round.
	// give out new white card to players.
	// award point to player who won.
	// choose new judge and give them judging rights.
	$user = $_POST['user_ID'];
	$game = $_POST['game_ID'];
	$card = $_POST['white_card_contents'];
} // end of judge chose card
?>