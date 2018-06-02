

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
document.getElementById("f_l_a").style.display="block";

	// var postal_code = jQuery('.postal_code').val();
	// var firstname = jQuery('.firstname').val();
	// var date = jQuery('.date').val();

			var danie = $("#ajax_form").serialize();

			$("#ajax_form").click(function(){
				$.ajax({
					url: "/app/include/functions.php",
					type: "POST",
					data:danie,
					success: function(data) {

				
					}
					
			});
			});

		}



		var r = /^\w+@\w+\.\w{2,4}$/i; 
        


		function yea() {
				var email, p, r;
				r = /^\w+@\w+\.\w{2,4}$/i;
				var danie = $("#form1").serialize();
				email = document.getElementById('em').value;
				p = document.getElementById('vivod');
				if ( !email)  {
						p.innerHTML = "EMAIL ADDRESS IS REQUIRED";
				}

				else if (!r.test(email)){

						p.innerHTML = "PLEASE ENTER A VALID EMAIL ADDRESS";
				}  
				else {
						document.getElementById('form_valid12').style.display="block";
						document.getElementById("form1").style.display="none";
						document.getElementById("f_l_a").style.display="none";
				}
		}