<?php

if(isset($_POST['quote'])){
	
	$quote = $_POST['quote'];
	$myDatabaseFunctions->addNewQuote($quote);
}

?>