// get the session data from the server
$.post('/server/api.php',
	{init_session:true},
	function(data) {
		x = data;
		server_provides = JSON.parse(data);
	})
	.done(function() {
		// when ready, set up the black card in the main view
		var judgement_card = new Card('black', server_provides.black_card_contents);
		judgement_card.add_to_blacks();
		
		// add the white cards to the main view
		var whitey = new White_Cards();
		whitey.initialize();
	});

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

// function to change header text
var warnings_update = function(the_text) {
	$.when( $('.warnings').slideUp() ).done(function(){
		this.html(the_text).slideDown();
	});
};

// get white cards from the server and add them to the main view.
function White_Cards () {
	this.initialize = function() {
		for (a in server_provides.other_players_cards) {
			var card_i = server_provides.other_players_cards[a];
			card_i = new Card('white', card_i);
			card_i.add_to_whites();
		}
	};
}