<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>MUSIC</title>
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="../../css/music.css">
	<link rel="stylesheet" href="../../css/top_menu_formusic.css">
	<script src="../../js/jquery.min.js"></script>
	<link rel="stylesheet" href="../../css/style.css">
	<script src="../js/mediaelement-and-player.min.js"></script>
	<link rel="stylesheet" href="../../css/media.css">

</head>



<body>
<? include_once "top_menuru.php"; ?>

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
					<h3>Окунитесь в мир музыки от XWL</h3>
				</div>
			</div>


		</div>





		<div class="content-1">



			<div class="genre">
				<div class="name_genre">
					<h1>
						<h1>Последние треки</h1>
					</h1>
				</div>
			</div>



			<div class="albums">
				<div class="albums_box">
					<div class="img_box">
						<img src="../../img/album_img/3.jpg" alt="">
					</div>

					<div class="info_box">
						<div class="nametrack ib1">
							<button>Di</button>
						</div>
						<div class="play_track ib1">
							<button id="bt_play1" onclick=" var c= 'bt_play1'; var b ='Di';music_play(b,c)"> PLAY</button>
						</div>

					</div>
				</div>

				<div class="albums_box">
					<div class="img_box">
						<img src="../../img/album_img/4.jpg" alt="">
					</div>

					<div class="info_box">
						<div class="nametrack ib1">
							<button>Mirror</button>
						</div>
						<div class="play_track ib1">
							<button id="bt_play2" onclick=" var c='bt_play2';var b ='Mirror';music_play(b,c)">PLAY</button>
						</div>

					</div>
				</div>

				<div class="albums_box">
					<div class="img_box">
						<img src="../../img/album_img/2.jpg" alt="">
					</div>

					<div class="info_box">
						<div class="nametrack ib1">
							<button>BLISS OUT</button>
						</div>
						<div class="play_track ib1">
							<button id="bt_play3" onclick="var c= 'bt_play3'; var b ='BLISS OUT';music_play(b,c)">PLAY</button>
						</div>

					</div>
				</div>

			</div>
			<br>
			<br>
			<br>
		</div>



		<div class="content-2">


			<div class="genre">
				<div class="name_genre">
					<h1>
						<h1> Альбомы</h1>
					</h1>
				</div>
			</div>

			<div class="albums">
				<div class="albums_box el1" id="el1">
					<div class="img_box">
						<img src="../../img/bgi3.jpg" alt="">
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
						<img src="../../img/bgi2.jpg" alt="">
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
						<img src="../../img/album_img/2.jpg" alt="">
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

		<div class="content_album3 al" id="c_a_3">
			<div class="genre">
				<div class="name_genre">
					<h1>
						<h1>BLISS OUT</h1>
					</h1>
				</div>
			</div>

			<div class="tracks">
				<div class="track_list">
						<div class="track">
								<label for="">LYTH:</label>
								<label id="name_track" value="123" onclick=" var a ='Slow Decay';a_play_music1(a)">Slow Decay</label>
	
							</div>

							<div class="track">
									<label for="">LYTH:</label>
									<label id="name_track" onclick="var a ='Oblivion';a_play_music1(a)">Oblivion</label>
		
								</div>

								<div class="track">
										<label for="">LYTH:</label>
										<label id="name_track" onclick="var a ='Embris';a_play_music1(a)">Embris</label>
			
									</div>

									<div class="track">
											<label for="">LYTH:</label>
											<label id="name_track" onclick="var a ='Flying Roofs';a_play_music1(a)">Flying Roofs </label>
				
										</div>
	



				</div>
					






			</div>

			<div class="center_get">
				<div class="menuuu">
					<div class="menuuu1">
						<ul class="main-menu">
							<li>
								<button class="btn_get"> Получить</button>

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

				<div class="audio_mp">
					<div class="player_p">
						<div class="audio-player3">
						<audio id="a_p3" id="audio-player" src="../../demo.mp3" type="audio/mp3" controls="controls"></audio>
					</div>

					<script>
						$(document).ready(function () {
							$('#audio-player3').mediaelementplayer({
								alwaysShowControls: true,
								features: ['playpause', 'volume', 'progress'],
								audioVolume: 'horizontal',
								audioWidth: 400,
								audioHeight: 120
								
							});
						});
					</script>
				<style>
				.mejs-time-loaded{
					width: 400px;
				}
				</style>
					</div>
				</div>

		</div>

		<!-- ALBUM2 -->
		<div class="content_album2 al" id="c_a_2">
			<div class="genre">
				<div class="name_genre">
					<h1>
						<h1>SPACE A ROUND</h1>
					</h1>
				</div>
			</div>
			<div class="tracks">
					<div class="track_list">
							<div class="track">
									<label for="">LYTH:</label>
									<label id="name_track" onclick=" var a ='Structure';a_play_music2(a)">Structure</label>
		
								</div>
	
								<div class="track">
										<label for="">LYTH:</label>
										<label id="name_track" onclick="var a ='Distortion';a_play_music2(a)">Distortion</label>
			
									</div>
	
									<div class="track">
											<label for="">LYTH:</label>
											<label id="name_track" onclick="var a ='World';a_play_music2(a)">World</label>
				
										</div>
	
										<div class="track">
												<label for="">LYTH:</label>
												<label id="name_track" onclick="var a='Particles';a_play_music2(a)">Particles </label>
					
											</div>
		
	
	
	
					</div>
						
	
	
	
	
	
	
				</div>
	
				<div class="center_get">
					<div class="menuuu">
						<div class="menuuu1">
							<ul class="main-menu">
								<li>
									<button class="btn_get"> Получить</button>
	
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
	
					<div class="audio_mp">
						<div class="player_p">
							<div class="audio-player2">
							<audio id="a_p2" id="audio-player" src="../../demo.mp3" type="audio/mp3" controls="controls"></audio>
						</div>
	
						<script>
							$(document).ready(function () {
								$('#audio-player2').mediaelementplayer({
									alwaysShowControls: true,
									features: ['playpause', 'volume', 'progress'],
									audioVolume: 'horizontal',
									audioWidth: 400,
									audioHeight: 120
									
								});
							});
						</script>
					<style>
					.mejs-time-loaded{
						width: 400px;
					}
					</style>
						</div>
					</div>

	
					</div>
						
	
	
	
	
	
		



	
		<!-- ALBUM2 -->

		<!-- ALBUM1 -->
		<div class="content_album1 al" id="c_a_1">
			<div class="genre">
				<div class="name_genre">
					<h1>
						<h1>SPACE </h1>
					</h1>
				</div>
			</div>

			<div class="tracks">
					<div class="track_list">
							<div class="track">
									<label for="">LYTH:</label>
									<label id="name_track" onclick=" var a ='Core';a_play_music3(a)">Core</label>
		
								</div>
	
								<div class="track">
										<label for="">LYTH:</label>
										<label id="name_track" onclick="var a ='Observatory';a_play_music3(a)">Observatory</label>
			
									</div>
	
									<div class="track">
											<label for="">LYTH:</label>
											<label id="name_track" onclick="var a ='Black Water';a_play_music3(a)">Black Water</label>
				
										</div>
	
										<div class="track">
												<label for="">LYTH:</label>
												<label id="name_track" onclick="var a='Outline';a_play_music3(a)">Outline </label>
					
											</div>
		
	
	
	
					</div>
						
	
	
	
	
	
	
				</div>
	
				<div class="center_get">
					<div class="menuuu">
						<div class="menuuu1">
							<ul class="main-menu">
								<li>
									<button class="btn_get"> Получить</button>
	
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
	
					<div class="audio_mp">
						<div class="player_p">
							<div class="audio-player1">
							<audio id="a_p1" id="audio-player" src="../../demo.mp3" type="audio/mp3" controls="controls"></audio>
						</div>
	
						<script>
							$(document).ready(function () {
								$('#audio-player1').mediaelementplayer({
									alwaysShowControls: true,
									features: ['playpause', 'volume', 'progress'],
									audioVolume: 'horizontal',
									audioWidth: 400,
									audioHeight: 120
									
								});
							});
						</script>
					<style>
					.mejs-time-loaded{
						width: 400px;
					}
					</style>
						</div>
					</div>

		</div>

	 <? include_once "../m_footer.php"; ?>
</body>

<script src="../../js/music.js"></script>

</html>