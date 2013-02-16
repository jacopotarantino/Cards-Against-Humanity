<?php

    session_start();

    if (isset($_GET['name']) && isset($_SESSION['userid'])): 
    
      require_once("../dbcon.php");
  
      $name = cleanInput($_GET['name']);

      $getRooms = "SELECT *
  			           FROM chat_rooms
  		             WHERE name = '$name'";
  		         
      $roomResults = mysql_query($getRooms);
		
	  	if (mysql_num_rows($roomResults) < 1) {
  			header("Location: ../chatrooms.php");
  			die();
  		}
        	
      while ($rooms = mysql_fetch_array($roomResults)) {
          $file =  $rooms['file'];
      }

?>

<?php include("../templates/header.php"); ?>

	<div class="game-area">
		<div class="black-cards"></div>
		<div class="white-cards"></div>
	</div>


    <div class="chat-container">
        
    	<div id="section">
    
            <h2><?php echo $name; ?></h2>
                     
            <div id="chat-wrap">
                <div id="chat-area"></div>
            </div>
            
            <div id="userlist"></div>
                
                <form id="send-message-area" action="">
                    <textarea id="sendie" maxlength='100'></textarea>
                </form>
            
        </div>
        
	</div>

	<script type="text/javascript" src="chat.js"></script>
	<script src="../js/cardgame.js"></script>
	<script type="text/javascript">
		var chat = new Chat('<?php echo $file; ?>');
		chat.init();
		chat.getUsers(<?php echo "'" . $name ."','" .$_SESSION['userid'] . "'"; ?>);
		var name = '<?php echo $_SESSION['userid'];?>';
	</script>
	<script type="text/javascript" src="settings.js"></script>
</body>

</html>

<?php
    else:
            header('Location: /');
    endif; 
?>