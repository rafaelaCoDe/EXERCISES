<?php

	function h1($msg, $color) {
		return "<hr><br><h1 style='color:$color;'>$msg</h1><br><hr><br>";
	}
	
	function h2($msg, $color) {
		return "<hr><br><h2 style='color:$color;'>$msg</h2><br><hr><br>";
	}
	
	function h3($msg, $color) {
		return "<hr><br><h3 style='color:$color;'>$msg</h3><br><hr><br>";
	}
	
	function h4($msg, $color) {
		return "<hr><br><h4 style='color:$color;'>$msg</h4><br><hr><br>";
	}

	function h5($msg, $color) {
		return "<hr><br><h5 style='color:$color;'>$msg</h5><br><hr><br>";
	}
	
	function h6($msg, $color) {
		return "<hr><br><h6 style='color:$color;'>$msg</h6><br><hr><br>";
	}

	
	echo h1("Hello World", "red");
	echo h2("Hello World", "blue");
	echo h3("Hello World", "green");
	echo h4("Hello World", "purple");
	echo h5("Hello World", "orange");
	echo h6("Hello World", "pink");

	echo "<hr><br>";
	echo "<h1 style='color:gray;'>hello</h1><br>";
	echo "<hr><br>";

?>