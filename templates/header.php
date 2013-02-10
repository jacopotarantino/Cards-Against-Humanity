<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Cards Against Humanity Online</title>
    
    <link rel="stylesheet" type="text/css" href="../css/main.css"/>
    
    <script src="../js/foundation.min.js" type="text/javascript"></script>
</head>

<body>

	<header>
    	<h1><a href="http://jacopotarantino.com/CAH/">Cards Against Humanity Online</a></h1>
		<?php if ( isset($_SESSION['userid']) ): ?>
    	<div class="you">
			<span>Logged in as:</span> <?php echo $_SESSION['userid'] ?><br>
			<a href="logout" class="logout">Log Out</a>
		</div>
		<?php endif; ?>
    </header>