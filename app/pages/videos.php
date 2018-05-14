<?php require_once '../include/database.php' ?>
<?php require_once '../include/vidos.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>VIDEOS</title>
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/top_menu_formusic.css">
	<link rel="stylesheet" href="../css/videos.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
	<script src="../js/videos.js"></script>
</head>

<body>
	<? include_once 'top_menu.php' ?>


		<div class="content1">
			<div class="wrap">
				<div class="p_video" id="video">
					<iframe src="https://vk.com/video_ext.php?oid=98756565&id=456239055&hash=a05cc907540c7637" width="100%" height="100%" frameborder="0"
					  allowfullscreen></iframe>
				</div>
				<div class="p_info">
					<div class="p_logo" style="text-align: center;">
						<h1>X W L</h1>
					</div>
					<div class="p_name" id="name" style="text-align: center;">
						<h2>WATCH MY INTRO </h2>
					</div>
					<div class="p_content" id="concept">
						<p>Ambient (English ambient - ambient) - style of electronic music, based on the modulations of the sound timbre. Ambient
							is often characterized by atmospheric, enveloping, unobtrusive, background sound. ... Thus, the very definition of
							the concept of "ambient" was significantly expanded.</p>
					</div>
					<div class="mm">
						<div class="more">
							<div class="more_click">
								<p>IF YOU LIKE IT - CLICK HERE</p>
							</div>

							<button class="btn_more">MORE</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="logo_content">
			<div class="genre">
				<h2>MORE VIDEOS</h2>
			</div>
		</div>
		<div class="content2">
			<div class="wrap2">
				<?php $v_post = get_posts() ?>
				<?php foreach ($v_post as $post): ?>
				<div class="box">
					<div class="box_img">
						<img src=<?=$post['img']?> >
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
								<button type="submit">WATCH</button>
							</div>
						</form>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		</div>

		<? include_once 'm_footer.php' ?>
</body>

</html>