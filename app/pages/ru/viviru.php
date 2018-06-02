<?php require_once '../../include/database.php' ?>
<?php require_once '../../include/get_vidios.php' ?>
<?php require_once '../../include/vidos.php' ?>
<? $name = $_GET['id'];   ?>
	<?php $v_post1 = take_video() ?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>VIDEOS</title>
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
		<link rel="stylesheet" href="../../css/top_menu_formusic.css">
		<link rel="stylesheet" href="../../css/videos.css">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
		<script src="../../js/videos.js"></script>
	</head>

	<body>
	<? include_once "top_menuru.php"; ?>

<?php foreach ($v_post1 as $post): ?>

<div class="vi_wrap_name">
		<div class="vi_name">
			<h1> <?=$post['name'] ?></h1>
		</div>
</div>

<div class="vi_conteiner">

	<div class="vi_wrap">
		<div class="vi_video">
				<iframe src="<?=$post['inframe1'] ?>" width="900" height="560" frameborder="0" allowfullscreen></iframe>
				
		</div>
	</div>
	<?php endforeach; ?>
</div>

<div class="logo_content">
		<div class="genre">
			<h2>Больше видео</h2>
		</div>
	</div>
	<div class="content2">
		<div class="wrap2">
			<?php $v_post = get_posts() ?>
			<?php foreach ($v_post as $post): ?>
			<div class="box">
				<div class="box_img">
					<img src=../<?=$post['img']?> >
				</div>
				<div class="span">
					<div class="n_span">

						<button id="<?=$post['class']?>">
							<?=$post['name'] ?>
						</button>

					</div>
					<form action="vivi.php" method="get">
						<div class="b_span">
							<input type="text" name="id" value="<?=$post['id'] ?>" style="display: none">
							<button type="submit">Смотреть</button>
						</div>
					</form>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
	</div>
		


	</body>
	<? include_once "../m_footer.php"; ?>
	</html>

