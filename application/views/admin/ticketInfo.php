<?php
	

	echo anchor('main/admin', 'Back') . "<br />";

	echo "<h1>Ticket Info</h1>";

	if (!empty($ticketList)) {
		echo $this->table->generate($ticketList);
	}
?>
