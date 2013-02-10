var C = (function(){

	function Card (color,contents) {
		this.html = "<div class=\"" + color + "-card\"><p class=\"card-contents\">" + contents + "</p></div>";

		this.add_to_whites = function() {
			$('.white-cards').append( $(this.html) );
		};
		this.add_to_blacks = function() {
			$('.black-cards').append( $(this.html) );
		};
	}
	
	var card1 = new Card('white','some snarky setup');
	card1.add_to_whites();
	
	var card2 = new Card('black','a really disgusting answer');
	card2.add_to_blacks();
	var card3 = new Card('black','a really disgusting answer');
	card3.add_to_blacks();
	var card4 = new Card('black','a really disgusting answer');
	card4.add_to_blacks();
	var card5 = new Card('black','a really disgusting answer');
	card5.add_to_blacks();
	var card6 = new Card('black','a really disgusting answer');
	card6.add_to_blacks();
	var card7 = new Card('black','a really disgusting answer');
	card7.add_to_blacks();
	var card8 = new Card('black','a really disgusting answer');
	card8.add_to_blacks();
	
	return {
		"Card": Card
		};
})();

