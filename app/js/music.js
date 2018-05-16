




 	var audio = new Audio();
function music_play(b,c) {
	c = ''+ c +'';
	var bttn = document.getElementById(c);
	var music;
	music = "../media/"  + b + ".mp3";
	audio.src = music;
	
	 if (audio.paused == true) {
		audio.play();
		bttn.textContent = "STOP";
	} 

	else if (audio.played == true) {
		audio.pause();
		bttn.textContent = "PLAY";
	}

}

var btn_o1 , btn_o2 , btn_o3

btn_o1 = document.getElementById('el1');
btn_o2 = document.getElementById('el2');
btn_o3 = document.getElementById('el3');


function show_album2(){
	if(document.getElementById('btn_el2').textContent == "SHOW") {
		document.getElementById('btn_el2').textContent = "HIDE";
		document.getElementById('c_a_2').style.display= "block";
		}
	
		else if(document.getElementById('btn_el2').textContent == "HIDE") {
			document.getElementById('btn_el2').textContent = "SHOW";
			document.getElementById('c_a_2').style.display= "none";
			}
}

function show_album(){
	
	if(document.getElementById('btn_el3').textContent == "SHOW") {
	document.getElementById('btn_el3').textContent = "HIDE";
	document.getElementById('c_a_3').style.display= "block";
	}

	else if(document.getElementById('btn_el3').textContent == "HIDE") {
		document.getElementById('btn_el3').textContent = "SHOW";
		document.getElementById('c_a_3').style.display= "none";
		}

	
}

function show_album1(){
	if(document.getElementById('btn_el1').textContent == "SHOW") {
		document.getElementById('btn_el1').textContent = "HIDE";
		document.getElementById('c_a_1').style.display= "block";
		}
	
		else if(document.getElementById('btn_el1').textContent == "HIDE") {
			document.getElementById('btn_el1').textContent = "SHOW";
			document.getElementById('c_a_1').style.display= "none";
			}
		
}	


function a_play_music1(a) {
	var name =[], track;
	
	name[0] = "Slow Decay";
	name[1] = "Oblivion";
	name[2] = "Embris";
	name[3] = "Flying Roofs";
 
	

	for(var i=0;i< name.length; i++){
		if (name[i] == a) {
			track = i;
		}
	}
	$music = "../media/"  + name[track] + ".mp3"; 

	$('#a_p3').attr('src', $music );

}

function a_play_music2(a) {
	var name =[], track;
	
	name[0] = "Structure";
	name[1] = "Distortion";
	name[2] = "World";
	name[4] = "Particles";
 
	

	for(var i=0;i< name.length; i++){
		if (name[i] == a) {
			track = i;
		}
	}
	$music = "../media/"  + name[track] + ".mp3"; 

	$('#a_p2').attr('src', $music );

}

function a_play_music3(a) {
	var name =[], track;
	
	name[0] = "Core";
	name[1] = "Observatory";
	name[2] = "Black Water";
	name[4] = "Outline";
 
	

	for(var i=0;i< name.length; i++){
		if (name[i] == a) {
			track = i;
		}
	}
	$music = "../media/"  + name[track] + ".mp3"; 

	$('#a_p1').attr('src', $music );

}

function scroll(){
	$('.go_to').click( function(){ // ловим клик по ссылке с классом go_to
		var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
					if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
				$('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 1500); // анимируем скроолинг к элементу scroll_el
					}
				return false; // выключаем стандартное действие
			});
}