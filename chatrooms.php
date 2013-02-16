<?php 
    
    session_start();

    require_once("dbcon.php");

    if (checkVar($_SESSION['userid'])): 
 
        $getRooms = "SELECT *
        			 FROM chat_rooms";
        $roomResults = mysql_query($getRooms);		  


include('templates/header.php');
?>



    <div id="page-wrap">
        
    	<div id="section">
    	
            <div id="rooms">
            	<h3>Rooms</h3>
                <ul>
                    <?php 
                        while($rooms = mysql_fetch_array($roomResults)):
                            $room = $rooms['name'];
                            $query = mysql_query("SELECT * FROM `chat_users_rooms` WHERE `room` = '$room' ") or die("Cannot find data". mysql_error());
                            $numOfUsers = mysql_num_rows($query);
                    ?>
                    <li>
                        <a href="room/?name=<?php echo $rooms['name']?>"><?php echo $rooms['name'] . "<span>Users chatting: <strong>" . $numOfUsers . "</strong></span>" ?></a>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
        
    </div>

</body>

</html>

<?php 

    else: 
	   header('Location: http://css-tricks.com/examples/Chat2/');
	   
	endif;
	
?>