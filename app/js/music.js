
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



function show_album(){
	document.getElementById('btn_el3').textContent = "HIDE";
}
