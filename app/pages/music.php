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
s
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
					<a href="" `>
						<h1>MORE</h1>
					</a>
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
				<div class="albums_box el1" id="el1">
					<div class="img_box">
						<img src="../img/album_img/3.jpg" alt="">
					</div>

					<div class="info_box">
						<div class="nametrack ib1">
							<button>NAME</button>
						</div>
						<a class="go_to" href="#c_a_1">
						<div class="play_track ib1">
							<button id="btn_el1" onclick="show_album1()">SHOW</button>
						</div>
						</a>

					</div>
				</div>

				<div class="albums_box el2" id="el2">
					<div class="img_box">
						<img src="../img/album_img/4.jpg" alt="">
					</div>

					<div class="info_box">
						<div class="nametrack ib1">
							<button>NAME</button>
						</div>
						<a class="go_to" href="#c_a_2">
						<div class="play_track ib1">
							<button id="btn_el2" onclick="show_album2()">SHOW</button>
						</div>
						</a>
					</div>
				</div>

				<div class="albums_box " id="el3">
					<div class="img_box">
						<img src="../img/album_img/2.jpg" alt="">
					</div>

					<div class="info_box">
						<div class="nametrack ib1">
							<button>NAME</button>
						</div>
						<a class="go_to" href="#c_a_3">
						<div class="play_track ib1">
							<button id="btn_el3" onclick="show_album()">SHOW</button>
						</div>
						</a>

					</div>
				</div>

			</div>
			<br>
			<br>
			<br>
		</div>

		<div class="content_album3" id="c_a_3">
			<div class="genre" >
				<div class="name_genre">
					<h1>
						<h1>BLISS OUT</h1>
					</h1>
				</div>
			</div>

			<div class="tracks">
				<div class="track_center">
					<div class="track_list1">
						<div class="track">
							<button onclick="a_play_music()" id="a_btn1">
								<i class="fas fa-play-circle"></i>
							</button>
							<label for="">LYTH:</label>
							<label id="name_track">Slow Decay </label>

						</div>
						<div class="track">
							<button>
								<i class="fas fa-play-circle"></i>
							</button>
							<label for="">LYTH:</label>
							<label id="name_track">Embris </label>

						</div>
						<div class="track">
							<button>
								<i class="fas fa-play-circle"></i>
							</button>
							<label for="">LYTH:</label>
							<label id="name_track">Flying Roofs </label>

						</div>
						<div class="track">
							<button>
								<i class="fas fa-play-circle"></i>
							</button>
							<label for="">LYTH:</label>
							<label id="name_track">Bliss Out </label>

						</div>
						<div class="track">
							<button>
								<i class="fas fa-play-circle"></i>
							</button>
							<label for="">LYTH:</label>
							<label id="name_track">World</label>

						</div>
					</div>

					<div class="track_list2">
						<div class="track">
							<button>
								<i class="fas fa-play-circle"></i>
							</button>
							<label for="">LYTH:</label>
							<label id="name_track">Particles </label>

						</div>
						<div class="track">
							<button>
								<i class="fas fa-play-circle"></i>
							</button>
							<label for="">LYTH:</label>
							<label id="name_track">I x prologo </label>

						</div>
						<div class="track">
							<button>
								<i class="fas fa-play-circle"></i>
							</button>
							<label for="">LYTH:</label>
							<label id="name_track">Structure </label>

						</div>
						<div class="track">
							<button>
								<i class="fas fa-play-circle"></i>
							</button>
							<label for="">LYTH:</label>
							<label id="name_track">Death </label>

						</div>
						<div class="track">
							<button>
								<i class="fas fa-play-circle"></i>
							</button>
							<label for="">LYTH:</label>
							<label id="name_track">Coldness</label>

						</div>
					</div>

				</div>

			</div>

			<div class="center_get">
				<div class="menuuu">
					<div class="menuuu1">
						<ul class="main-menu">
							<li>
								<button class="btn_get"> GET IT NOW</button>

								<ul class="sub-menu">
									<li>
										<a href="">APPLE MUSIC</a>
									</li>
									<li>
										<a href="">ITUNES</a>
									</li>
									<li>
										<a href="">SPOTIFY</a>
									</li>
									<li>
										<a href="">TIDAL</a>
									</li>
									<li>
										<a href="">GOOGLE PLAY</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>



		</div>

<!-- ALBUM2 -->
<div class="content_album2" id="c_a_2">
	<div class="genre" >
		<div class="name_genre">
			<h1>
				<h1>SPACE A ROUND</h1>
			</h1>
		</div>
	</div>

	<div class="tracks">
		<div class="track_center">
			<div class="track_list1">
				<div class="track">
					<button onclick="a_play_music()" id="a_btn1">
						<i class="fas fa-play-circle"></i>
					</button>
					<label for="">LYTH:</label>
					<label id="name_track">Slow Decay </label>

				</div>
				<div class="track">
					<button>
						<i class="fas fa-play-circle"></i>
					</button>
					<label for="">LYTH:</label>
					<label id="name_track">Embris </label>

				</div>
				<div class="track">
					<button>
						<i class="fas fa-play-circle"></i>
					</button>
					<label for="">LYTH:</label>
					<label id="name_track">Flying Roofs </label>

				</div>
				<div class="track">
					<button>
						<i class="fas fa-play-circle"></i>
					</button>
					<label for="">LYTH:</label>
					<label id="name_track">Bliss Out </label>

				</div>
				<div class="track">
					<button>
						<i class="fas fa-play-circle"></i>
					</button>
					<label for="">LYTH:</label>
					<label id="name_track">World</label>

				</div>
			</div>

			<div class="track_list2">
				<div class="track">
					<button>
						<i class="fas fa-play-circle"></i>
					</button>
					<label for="">LYTH:</label>
					<label id="name_track">Particles </label>

				</div>
				<div class="track">
					<button>
						<i class="fas fa-play-circle"></i>
					</button>
					<label for="">LYTH:</label>
					<label id="name_track">I x prologo </label>

				</div>
				<div class="track">
					<button>
						<i class="fas fa-play-circle"></i>
					</button>
					<label for="">LYTH:</label>
					<label id="name_track">Structure </label>

				</div>
				<div class="track">
					<button>
						<i class="fas fa-play-circle"></i>
					</button>
					<label for="">LYTH:</label>
					<label id="name_track">Death </label>

				</div>
				<div class="track">
					<button>
						<i class="fas fa-play-circle"></i>
					</button>
					<label for="">LYTH:</label>
					<label id="name_track">Coldness</label>

				</div>
			</div>

		</div>

	</div>

	<div class="center_get">
		<div class="menuuu">
			<div class="menuuu1">
				<ul class="main-menu">
					<li>
						<button class="btn_get"> GET IT NOW</button>

						<ul class="sub-menu">
							<li>
								<a href="">APPLE MUSIC</a>
							</li>
							<li>
								<a href="">ITUNES</a>
							</li>
							<li>
								<a href="">SPOTIFY</a>
							</li>
							<li>
								<a href="">TIDAL</a>
							</li>
							<li>
								<a href="">GOOGLE PLAY</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>



</div>
<!-- ALBUM2 -->

<!-- ALBUM1 -->
<div class="content_album1" id="c_a_1">
	<div class="genre" >
		<div class="name_genre">
			<h1>
				<h1>SPACE A ROUND</h1>
			</h1>
		</div>
	</div>

	<div class="tracks">
		<div class="track_center">
			<div class="track_list1">
				<div class="track">
					<button onclick="a_play_music()" id="a_btn1">
						<i class="fas fa-play-circle"></i>
					</button>
					<label for="">LYTH:</label>
					<label id="name_track">Slow Decay </label>

				</div>
				<div class="track">
					<button>
						<i class="fas fa-play-circle"></i>
					</button>
					<label for="">LYTH:</label>
					<label id="name_track">Embris </label>

				</div>
				<div class="track">
					<button>
						<i class="fas fa-play-circle"></i>
					</button>
					<label for="">LYTH:</label>
					<label id="name_track">Flying Roofs </label>

				</div>
				<div class="track">
					<button>
						<i class="fas fa-play-circle"></i>
					</button>
					<label for="">LYTH:</label>
					<label id="name_track">Bliss Out </label>

				</div>
				<div class="track">
					<button>
						<i class="fas fa-play-circle"></i>
					</button>
					<label for="">LYTH:</label>
					<label id="name_track">World</label>

				</div>
			</div>

			<div class="track_list2">
				<div class="track">
					<button>
						<i class="fas fa-play-circle"></i>
					</button>
					<label for="">LYTH:</label>
					<label id="name_track">Particles </label>

				</div>
				<div class="track">
					<button>
						<i class="fas fa-play-circle"></i>
					</button>
					<label for="">LYTH:</label>
					<label id="name_track">I x prologo </label>

				</div>
				<div class="track">
					<button>
						<i class="fas fa-play-circle"></i>
					</button>
					<label for="">LYTH:</label>
					<label id="name_track">Structure </label>

				</div>
				<div class="track">
					<button>
						<i class="fas fa-play-circle"></i>
					</button>
					<label for="">LYTH:</label>
					<label id="name_track">Death </label>

				</div>
				<div class="track">
					<button>
						<i class="fas fa-play-circle"></i>
					</button>
					<label for="">LYTH:</label>
					<label id="name_track">Coldness</label>

				</div>
			</div>

		</div>

	</div>

	<div class="center_get">
		<div class="menuuu">
			<div class="menuuu1">
				<ul class="main-menu">
					<li>
						<button class="btn_get"> GET IT NOW</button>

						<ul class="sub-menu">
							<li>
								<a href="">APPLE MUSIC</a>
							</li>
							<li>
								<a href="">ITUNES</a>
							</li>
							<li>
								<a href="">SPOTIFY</a>
							</li>
							<li>
								<a href="">TIDAL</a>
							</li>
							<li>
								<a href="">GOOGLE PLAY</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>



</div>
<!-- ALBUM1 -->



<? include_once "m_footer.php"; ?>
</body>

<script src="../js/music.js"></script>
</html>