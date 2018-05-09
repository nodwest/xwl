

<!-- Скрытая форма -->
<div class="background_form" id="form_valid12">
    <div class="forma_sign_valid" >
        <div class="wrap">
            <form action="" id="ajax_form" method="post">
                <h3>WELCOME AD TO XWL' MAILING LIST!</h3>
                <br>
                <p>CUSTOMIZE YOUR NOTIFICATIONS FOR TOUR DATES NEAR YOUR HOMETOWN, BIRTHDAY WISHES, OR SPECIAL DISCOUNTS IN OUR ONLINE STORE!</p> <br>
                <div class="inter_form">
                    <div class="postalcode " >
                        <h5>POSTAL CODE</h5>
                        <input type="text" id="postal_code" name="postal_code1">
                    </div>
                    <div class="country ">
                        <h5>COUNTRY</h5>
                        <select name="country1" id="country">
                            <option value="0" class="opt">YOUR CONTRY</option>
                            <option value="2" class="opt">1</option>
                            <option value="3" class="opt">1</option>
                        </select>
                    </div>

                    <div class="firstname " >
                        <h5>FIRST NAME</h5>
                        <input type="text" style="width: 98%" id="firstname" name="firstname1">
                    </div>
                    <div class="bitrhday">
                        <h5>BIRTHDAY</h5>
                        <select name="mounth1" id="mounth">
                            <option value="0">MOUNTH</option>
                            <option value="1">June</option>
                        </select>
                        <select name="date1" id="date" style="margin-left: 11.89%;">
                            <option value="0">DATE</option>
                            <option value="1">1</option>
                        </select>
                    </div>

                    <div class="attach">
                        <input type="checkbox" class="checkbox" id="checkbox" name="checkbox1" >
                        <h5>SIGN ME UP TO DISCOVER MORE ARTISTS X W L!</h5>
                    </div>

                    <button  id="send" class= "btn_form" type="button" onclick="valid_form_signup()">SUBMIT</button>
                     <div id="result_form"> asdds</div>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- Скрытая форма -->
 
<script>
    function valid_form_signup(){
        var ps = document.getElementById('postal_code');
        var count = document.getElementById('country');
        var fs= document.getElementById('firstname');
        var mounth= document.getElementById('mounth');
        var date= document.getElementById('date');
        var  checkbox= document.getElementById('checkbox');
        var fall = true;

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




}



}

function ty() {
   document.getElementById('form_valid12').style.display= "none";
   document.getElementById('thu').style.display = "block";
   document.getElementById('b_wrap').style.display = "block";

}

 
</script>

 <script src="ajax.js"></script>

