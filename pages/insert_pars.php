<?php
require_once("../functions.php");

?>
<h1>paride sisestamine</h1>
<table border= 1>
	<tr>
		
		<th>korvi number</th>
		<th>PAR</th>
	<tr>
<?php

	$nr_of_baskets = $_GET["nr"];
	
	if(isset($_POST['save'])){
		var_dump($_POST);
		
		for($i = 0; $i < $_POST["nr"]; $i++){
			
			//salvestan 1. korvile tema par'i
			//korv on $i+1 - 1
			//$_POST["par"][$i] -5
			
			// korvi nr, par, mäng id
			saveParData(($i+1), $_POST["par"][$i], $_POST['park_id']);
				
			
			
			// "Salvestan mängu ".$_POST['park_id']." korvi nr ".($i+1)." par'i ".$_POST["par"][$i]."<BR>";
			
			header("Location:table.php");
		}
	}
	echo "<form action=insert_pars.php method='post'>";
	echo "<TABLE>";
	echo "<td><input name='park_id' type='hidden' value='".$_GET["id"]."'></td>";
	echo "<td><input name='nr' type='hidden' value='".$_GET["nr"]."'></td>";

	
	for($i = 1; $i <= $nr_of_baskets; $i++){
		
		echo "<tr>";
		
		echo "<td>".$i."</td>";
		echo "<td><input name='par[]'>"."</td>";
		echo "</tr>";
		
	

	}
	echo "</TABLE>";
	echo "<input type='submit' name='save' value='salvesta'>";
		echo "</form";

?>