<?php
 $choices = $_POST["choices"];
 foreach ($choices as &$choice)
 {
	 echo $choice;
	 echo "<br>";
 }
?>