<?php
    // configuration
    require("../includes/config.php"); 
	
	$id = $_SESSION["id"];
	
	// Retrieves all the transactions from the database ordered by date
	$history = cs50::query("SELECT symbol, status, shares, price, date FROM history WHERE id = $id ORDER BY date DESC");
	
    // render portfolio
    render("history_view.php", ["title" => "History", "history" => $history]);
?>