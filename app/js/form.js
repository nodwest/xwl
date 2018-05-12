

function valid_form_signup(){
	var ps = document.getElementById('postal_code');
	var count = document.getElementById('country');
	var fs= document.getElementById('firstname');
	var mounth= document.getElementById('mounth');
	var date= document.getElementById('date');
	var  checkbox= document.getElementById('checkbox');
	var email12 = document.getElementById('em').value;
	var fall = true;
	document.getElementById('emaaail1').value = email12;
	alert(document.getElementById('emaaail1').value);

	if (!ps.value || ps.value == " ") {
			ps.style.border = "1px solid red";
			fall = false;

	}
	else{
			ps.style.border = "1px solid white";
	}



	if (count.value == 0) {
			count.style.border = "1px solid red";
			fall = false;
	}

	else{
		 count.style.border = "1px solid white";
 }

 if (!fs.value || fs.value == " ") {
	fs.style.border = "1px solid red";
	fall = false;
}

else{
 fs.style.border = "1px solid white";
}


if (mounth.value == 0) {
mounth.style.border = "1px solid red";
fall = false;
}

else{
mounth.style.border = "1px solid white";
}

if (date.value == 0) {
date.style.border = "1px solid red";
fall = false;
}
else{
date.style.border = "1px solid white";
}

if (checkbox.checked){
alert("Osas");
}

if (fall == true) {
ty();
}



}

function ty() {
document.getElementById('form_valid12').style.display= "none";
document.getElementById('thu').style.display = "block";
document.getElementById('b_wrap').style.display = "block";

	// var postal_code = jQuery('.postal_code').val();
	// var firstname = jQuery('.firstname').val();
	// var date = jQuery('.date').val();

			var danie = $("#ajax_form").serialize();

			$("#ajax_form").click(function(){
				$.ajax({
					url: "include/database.php",
					type: "POST",
					data:danie,
					success: function(data) {

					}
					
			});
			});



		}



