//stuff that eventually the server will be sending over to the players

var server_provides = {
	player_ID:42,
	black_card_contents:"I'm sorry Professor, but I couldn't complete my homework because of ________.",
	other_players_cards: {
		p1: "A disappointing birthday party.",
		p2: "A disappointing birthday partyasdf.",
		p3: "A disappointing birthday party234.",
		p4: "A disappointing birthday party7.",
		p5: "A disappointing birthday party98.",
		p6: "A disapp345ointing birthday party."
	}
}

//create a new card and give it methods
function Card (color,contents) {
	this.html = "<div class=\""
	+ color
	+ "-card\"><p class=\"card-contents\">"
	+ contents
	+ "</p><div class=\"logo\"></div></div>";
	
	this.add_to_whites = function() {
		$('.white-cards').append( $(this.html) );
	};
	this.add_to_blacks = function() {
		$('.black-cards').append( $(this.html) );
	};
}

var warnings_update = function(the_text) {
	$.when( $('.warnings').slideUp() ).done(function(){
		this.html(the_text).slideDown();
	});
};

var judgement_card = new Card('black', server_provides.black_card_contents);
judgement_card.add_to_blacks();


function White_Cards () {
	this.initialize = function() {
		for (a in server_provides.other_players_cards) {
			var card_i = server_provides.other_players_cards[a];
			card_i = new Card('white', card_i);
			card_i.add_to_whites();
		}
	};
}
var whitey = new White_Cards();
whitey.initialize();

var initialize_session = (function() {
	$.post('/server/api.php',
	{user_ID:42, game_ID:8859},
	function(data) {
		x = data;
	});
})();