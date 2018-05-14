<?php

	function get_posts(){
		global $link;
		$sql =  "SELECT * FROM post_video";
		$result = mysqli_query($link, $sql) or die(mysqli_error($link));
		$v_post = mysqli_fetch_all ($result , MYSQLI_ASSOC);

		return $v_post;
	}
?>