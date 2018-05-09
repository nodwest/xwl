<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/music.css">
	<link rel="stylesheet" href="../css/top_menu_formusic.css">

</head>



<body>
	<? include_once "top_menu.php"; ?>

		<div class="slider">

		</div>

		<div class="logo_content-1">
			<div class="genre">
				<div class="name_genre">
					<h1>
						<h1>AMBIENT</h1>
					</h1>
				</div>

			</div>
			<div class="genre_info">
				<div class="info">
					<h3>Plunge into the world of music from XWL</h3>
				</div>
			</div>


		</div>





		<div class="content-1">



			<div class="genre">
				<div class="name_genre">
					<h1>
						<h1>SINGLE TRACKS</h1>
					</h1>
				</div>
			</div>



			<div class="albums">
				<div class="albums_box">
					<div class="img_box">
						<img src="../img/album_img/3.jpg" alt="">
					</div>

					<div class="info_box">
						<div class="nametrack ib1">
							<button>NAME</button>
						</div>
						<div class="play_track ib1">
							<button>PLAY</button>
						</div>

					</div>
				</div>

				<div class="albums_box">
					<div class="img_box">
						<img src="../img/album_img/4.jpg" alt="">
					</div>

					<div class="info_box">
						<div class="nametrack ib1">
							<button>NAME</button>
						</div>
						<div class="play_track ib1">
							<button>PLAY</button>
						</div>

					</div>
				</div>

				<div class="albums_box">
					<div class="img_box">
						<img src="../img/album_img/2.jpg" alt="">
					</div>

					<div class="info_box">
						<div class="nametrack ib1">
							<button>NAME</button>
						</div>
						<div class="play_track ib1">
							<button id="bt_play" onclick="music_play()">PLAY</button>
						</div>

					</div>
				</div>

			</div>
			<br>
			<br>
			<br>
		</div>

		<div class="logo_content-1">
			<div class="genre">
				<div class="name_genre">
					<a href=""`><h1>MORE</h1></a>
				</div>

			</div>
			<div class="genre_info">
				<div class="info">
					<button class=" btn_more">CLICK HERE</button>
				</div>
			</div>


		</div>

		<div class="content-2">

			
				<div class="genre">
						<div class="name_genre">
							<h1>
								<h1>ALBUMS</h1>
							</h1>
						</div>
					</div>

			<div class="albums">
				<div class="albums_box el1">
					<div class="img_box">
						<img src="../img/album_img/3.jpg" alt="">
					</div>

					<div class="info_box">
						<div class="nametrack ib1">
							<button>NAME</button>
						</div>
						<div class="play_track ib1">
							<button onclick="order_position()">SHOW</button>
						</div>

					</div>
				</div>

				<div class="albums_box el2">
					<div class="img_box">
						<img src="../img/album_img/4.jpg" alt="">
					</div>

					<div class="info_box">
						<div class="nametrack ib1">
							<button>NAME</button>
						</div>
						<div class="play_track ib1">
							<button onclick="order_position()">SHOW</button>
						</div>

					</div>
				</div>

				<div class="albums_box el3" >
					<div class="img_box">
						<img src="../img/album_img/2.jpg" alt="">
					</div>

					<div class="info_box">
						<div class="nametrack ib1">
							<button>NAME</button>
						</div>
						<div class="play_track ib1">
							<button id="bt_play" onclick="order_position()">SHOW</button>
						</div>

					</div>
				</div>

			</div>
			<br>
			<br>
			<br>
		</div>



	



		<div class="foot">
			s
		</div>
<script src="../js/music.js"></script>
</body>

</html>
