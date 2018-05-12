



var bttn = document.getElementById('bt_play');
var audio = new Audio();
audio.src = '../222.mp3';

function music_play() {


	if (audio.paused == true) {
		audio.play();
		bttn.textContent = "STOP";
	} else if (audio.paused == false) {
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

function a_play_music() {
	if(audio.paused == true){
		document.getElementById('a_btn1').innerHTML = '<i class="far fa-pause-circle"></i>';
		audio.play();
	}
	else if (audio.paused == false) {
		audio.pause();
		document.getElementById('a_btn1').innerHTML = '<i class="fas fa-play-circle"></i>';
	}
}

function scroll(){
	$('.go_to').click( function(){ // ловим клик по ссылке с классом go_to
		var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
					if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
				$('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500); // анимируем скроолинг к элементу scroll_el
					}
				return false; // выключаем стандартное действие
			});
}