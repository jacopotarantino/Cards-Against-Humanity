<?php
require_once('dbcon.php');

//function to return 7 white cards to a user and update the db to reflect their hand
function new_hand($userID) {
	$get_all_cards = "SELECT * FROM cah_cards WHERE color = 'white' LIMIT 7";
	$cards = mysql_query($get_all_cards);
	
	$results = [];
	while( $thecards = mysql_fetch_array($cards) ) {
		//array_push($results, $thecards['textcontent'] );
		$results[ $thecards['ID'] ] = $thecards['textcontent'];
	}
	
	//add the card IDs to the user's database entry
	$cardsql = "UPDATE `chat_users` SET `current_cards`='11,14,23,17,18,24,20' WHERE `username`='$userID'";
	
	
	echo json_encode($results);
}

//function to return just one white card to the user and update db to remove old/add new
function one_more() {
	
}

//retrieves the black card that is currently in play
function show_the_black($gamename) {
	$get_black_card = "SELECT current_card, current_judge FROM chat_rooms WHERE name = '$gamename'";
	$black_card_results = mysql_query($get_black_card);
	
	$results = [];
	while( $info = mysql_fetch_array($black_card_results) ) {
		$cardID = $info['current_card'];
		$results['current_cardID'] = $cardID;
		$results['current_judgeID'] = $info['current_judge'];
		
		$get_judge_card = "SELECT * FROM cah_cards WHERE ID = '$cardID' ";
		$card = mysql_query($get_judge_card);
		$card = mysql_fetch_array($card);
		$results['current_card'] = $card['textcontent'];
	}
	echo json_encode($results);
}

//handle any ajax requests. don't respond otherwise.
if( isAjax() ) {
	
	if( isset($_POST['new_hand']) ) {
		new_hand( cleanInput($_POST['userID']) );
		
	} elseif( isset($_POST['one_more']) ) {
		one_more();
		
	} elseif( isset($_POST['show_the_black']) ) {
		show_the_black( cleanInput($_POST['gamename']) );
	}
}



//silence is golden.
?>