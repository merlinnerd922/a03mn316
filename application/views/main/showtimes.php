<?php

echo "<h1>Showtime List</h1>";

echo anchor('','Back') . "<br />";
echo "<br/>";

//And if the $site variable is not empty we echo it's content by using the generate method of the table class / library
if (!empty($showtimes)) { 
	echo $this->table->generate($showtimes);
} 

?>

