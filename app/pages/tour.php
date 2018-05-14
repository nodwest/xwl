<?php require_once '../include/database.php' ?>
<?php require_once '../include/tickets.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>TOUR</title>
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/top_menu_formusic.css">
	<link rel="stylesheet" href="../css/tour.css">
	<title>TOUR</title>
</head>
<body>
	<? include_once 'top_menu.php' ?>

	<div class="logo">
		<h1>TOUR XWL</h1>
	</div>
	<div class="namefor_tour">
				<div class="nametour">
				<h2>AMBIENT XWL</h2>
				</div>
				
			</div>
	<div class="content1">
		<?php $tickets = get_posts() ?>
		<?php foreach ($tickets as $post): ?>

		<div class="tour">
			<div class="day">
				<div class="days"> <?=$post['day'] ?> </div>

				
				

			</div>		
			<div class="country-city">
				<div class="cc">
				<div class="cc"> <?=$post['counrty'] ?></div>
				</div>
				
			</div>
			<div class="place">
				<div class="places">
				<div class="plasec"><?=$post['place']?></div>
				</div>
			
			</div>
			<div class="tickets">
				<a href=""><button class="nametrack">TICKETS</button></a>
			</div>
		</div>
<?php endforeach; ?>
	</div>



<? include_once 'm_footer.php' ?>
</body>
</html>