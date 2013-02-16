var C = (function(){

	function Card (ID,color,contents) {
		this.ID = ID;
		
		this.html = "<div class=\"" + color + "-card\" id=\" + ID + \"><p class=\"card-contents\">" + contents + "</p></div>";

		this.add_to_whites = function() {
			$('.white-cards').append( $(this.html) );
		};
		this.add_to_blacks = function() {
			$('.black-cards').append( $(this.html) );
		};
	}

	var newhand = function(){
		$.post(
			'/cards.php',
			{
				'new_hand':true,
				'userID':userID
			},
			function(data){
				C.carddata = JSON.parse(data);
				for(card in C.carddata) {
					C.mycards[card] = new Card(card,'white',C.carddata[card]);
					C.mycards[card].add_to_whites();
				}
			}
		);
	};
	
	var show_the_black = function() {
		$.post(
			'/cards.php',
			{'show_the_black':true,'gamename':roomid},
			function(data) {
				C.blackdata = JSON.parse(data);
				C.mycards[C.blackdata.current_cardID] = new C.Card(C.blackdata.current_cardID, 'black', C.blackdata.current_card);
				C.mycards[C.blackdata.current_cardID].add_to_blacks();
			}
		);
	};
	
	return {
		"Card": Card,
		"newhand": newhand,
		"mycards":{},
		"show_the_black":show_the_black
		};
})();
$(document).ready(function(){
	C.newhand();
	C.show_the_black();
});
