<?php

	function get_posts(){
		global $link;
		$sql =  "SELECT * FROM tickets_buy";
		$result = mysqli_query($link, $sql) or die(mysqli_error($link));
		$tickets = mysqli_fetch_all ($result , MYSQLI_ASSOC);

		return $tickets;
	}
?>