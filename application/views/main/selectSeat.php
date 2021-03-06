<?php

	
	echo "<h1>Select a Seat: </h1>";
	echo "<link rel='stylesheet' type='text/css' href='" . base_url() . "css/graphicSeatSelection.css'>";
	echo "<script src=" . base_url() . "scripts/graphicSeatSelection.js></script>";
	
	echo form_open("main/userInformation");
	
	echo "<div class='theaterContainer'>";
		echo "<div class='seat leftSeat seat1'></div>";
		echo "<div class='seat rightSeat rs2 seat2'></div>";
		echo "<div class='seat rightSeat rs1 seat3'></div>";	
	echo "</div><br/>";
	
	echo form_submit("Select seat", "Select seat");
	echo form_close();
	echo "<p class='seatsLeftError'></p>";

	echo $x->title . "<br/>";
	echo $x->name . "<br/>";
	echo $x->address . "<br/>";
	echo $x->date . "<br/>";
	echo $x->time . "<br/>";
	echo $x->available . "<br/>";
	echo $x->tid . "<br/>"	;

?>
<script>
$(document).ready(function() {
	var js_array = [<?php echo implode(',', $tickets_remaining) ?>];
	var seatStr = ".seat";

	
	$(seatStr).addClass("occupied");
	
	for (var i = 0; i < js_array.length; i++) {
		var classStr = seatStr.concat(js_array[i].toString());
		$(classStr).removeClass("occupied").addClass("vacant");
	}

	if (js_array.length == 0) {
		alert("Something's wrong...we're not considering theaters with no seats available..");
	} else {
		var minSeat = Math.min.apply(null, js_array);
		var classStr = seatStr.concat(minSeat.toString());
		console.log(classStr);
		$(classStr).addClass("selected");
	}

	$(".seat").bind("click", function() {
		if ($(this).hasClass("vacant")) {
			$(".selected").addClass("vacant");
			$(".selected").removeClass("selected");
			$(this).addClass("selected");
			$(this).removeClass("vacant");
		}
	});
	
	
	
});
</script>