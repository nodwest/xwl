<?php
function take_video() {
		global $link;
		global $name; 
		$sql2 = "SELECT * FROM post_video WHERE id = $name";
		$result1 = mysqli_query($link, $sql2);
		$v_post1 = mysqli_fetch_all ($result1 , MYSQLI_ASSOC);

		return $v_post1;
}
?>