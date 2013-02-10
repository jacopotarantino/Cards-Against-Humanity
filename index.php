<?php 
    session_start();

    if (!isset($_SESSION['userid'])): 
?>

<?php include('templates/header.php'); ?>
	
    <div id="page-wrap"> 
    
    	<div id="section">
        	<form method="post" action="jumpin.php">
            	<label>Desired Username:</label>
                <div>
                	<input type="text" id="userid" name="userid" />
                    <input type="submit" value="Check" id="jumpin" />
            	</div>
            </form>
        </div>
        
        <div id="status">
        	<?php if (isset($_GET['error'])): ?>
        		<!-- Display error when returning with error URL param? -->
        	<?php endif;?>
        </div>
        
    </div>

    <script type="text/javascript" src="js/check.js"></script>
</body>

</html>

<?php 
    else:
        require_once("chatrooms.php");
    endif; 
?>