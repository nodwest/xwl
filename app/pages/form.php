
 <script src="js/form.js"></script>
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
                            <option value="2" class="opt">RUSSIAN</option>
                            <option value="3" class="opt">USA</option>
                            <option value="3" class="opt">China</option>
                            <option value="3" class="opt">China</option>
                            <option value="3" class="opt">UK</option>
                            <option value="3" class="opt">Turkey</option>
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
                            <option value="1">January</option>
                            <option value="1">February</option>
                            <option value="1">March</option>
                            <option value="1">April</option>
                            <option value="1">May</option>
                            <option value="1">June</option>
                            <option value="1">July</option>
                            <option value="1">August</option>
                            <option value="1">September</option>
                            <option value="1">October</option>
                            <option value="1">November</option>
                            <option value="1">December</option>
                        </select>
                        <select name="date1" id="date" style="margin-left: 11.89%;">
                            <option value="0">DATE</option>
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="1">5</option>
                            <option value="1">6</option>
                            <option value="1">7</option>
                            <option value="1">8</option>
                            <option value="1">9</option>
                            <option value="1">10</option>
                            <option value="1">11</option>
                            <option value="1">12</option>
                            <option value="1">13</option>
                            <option value="1">14</option>
                            <option value="1">15</option>
                            <option value="1">16</option>
                            <option value="1">17</option>
                            <option value="1">18</option>
                            <option value="1">19</option>
                            <option value="1">20</option>
                        </select>
                    </div>

                    <div class="attach">
                        <input type="checkbox" class="checkbox" id="checkbox" name="checkbox1" >
                        <h5>SIGN ME UP TO DISCOVER MORE ARTISTS X W L!</h5>
                    </div>
                    <input type="text" id="emaaail1" name="email" class="email_2">
                    <button  id="send" class= "btn_form" type="button" onclick="valid_form_signup()">SUBMIT</button>


                </div>
                   
            </form>
        </div>
    </div>
</div>
<!-- Скрытая форма -->
 
<?php 
// require_once 'include/database.php';
?>


