<?php

$link = mysqli_connect ("localhost", "nodwest", "123", "nodwest_app");
$postal_code = trim($_POST['postal_code1']);
$firstname = trim($_POST['firstname1']);
$date = trim($_POST['date1']);
$country = trim($_POST['country1']);
$mounth = trim($_POST['mounth1']);
$email = $_POST['email'];
// ВСТАВКА В БАЗУ ДАННЫХ;
$query = "INSERT INTO users VALUES('$firstname','$postal_code','$country','$mounth','$date','$email')";
$link->query($query);





?>