<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XWL</title>

    <link rel="stylesheet" href="css/main.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</head>

<? include_once 'pages/m_header.php'; ?>
<? include_once 'pages/m_sidebar.php' ?>
<body>


    <!-- Скрытая форма -->
    <div class="background_form" id="form_valid12">
        <div class="forma_sign_valid" >
            <div class="wrap">
                <form action="">
                    <h3>WELCOME AD TO XWL' MAILING LIST!</h3>
                    <br>
                    <p>CUSTOMIZE YOUR NOTIFICATIONS FOR TOUR DATES NEAR YOUR HOMETOWN, BIRTHDAY WISHES, OR SPECIAL DISCOUNTS IN OUR ONLINE STORE!</p> <br>
                    <div class="inter_form">
                        <div class="postalcode " >
                            <h5>POSTAL CODE</h5>
                            <input type="text">
                        </div>
                        <div class="country ">
                            <h5>COUNTRY</h5>
                            <select name="" id="" ">
                                <option value="1" class="opt">YOUR CONTRY</option>
                                <option value="1" class="opt">1</option>
                                <option value="1" class="opt">1</option>
                            </select>
                        </div>

                        <div class="firstname ">
                            <h5>FIRST NAME</h5>
                            <input type="text" style="width: 98%">
                        </div>
                        <div class="bitrhday">
                            <h5>BIRTHDAY</h5>
                            <select name="" id="">
                                <option value="">MOUNTH</option>
                            </select>
                            <select name="" id="" style="margin-left: 11.89%;">
                                <option value="">DATE</option>
                            </select>
                        </div>

                        <div class="attach">
                            <input type="checkbox" class="checkbox">
                            <h5>SIGN ME UP TO DISCOVER MORE ARTISTS LIKE LIL SKIES!</h5>
                        </div>

                        <button class= "btn_form">SUBMIT</button>




                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Скрытая форма -->

    <script type="text/javascript">
        var r = /^\w+@\w+\.\w{2,4}$/i; 

        function yea() {
            var email, p, r;
            r = /^\w+@\w+\.\w{2,4}$/i;



            email = document.getElementById('em').value;
            p = document.getElementById('vivod');
            if ( !email)  {
                p.innerHTML = "EMAIL ADDRESS IS REQUIRED";
            }

            else if (!r.test(email)){

                p.innerHTML = "GOOD JOB KID";
            }  
            else {
                document.getElementById('form_valid12').style.display="block";
                document.getElementById("form1").style.display="none";
                document.getElementById("b_wrap").style.display="none";
            }
        }

    </script>


    <form id="form1" action="" method="post">
        <div class="sign">
            <h3>STAY UP TO DATE WITH </h3>
            <h3> L Y T H. SIGN UP BELOW</h3>
            <input class="input_s" type="text" name="Email" placeholder=" INTER EMAIL" id="em">
            <input class="submit_button" type="button" value="JOIN" onclick="yea()">
            <div id="falls_email">
                <p id="vivod">  </p>
            </div>

        </div>



    </form>


    <div class="bottom_wrap" id="b_wrap">
        <div class="block1">
            <img src="img/spase_al.jpg" width="100%" height="100%" alt="">
        </div>

        <div class="block2">
            <div class="name_album">
                <h3> LAST ALBUM </h3>
            </div>
            <ul class="main-menu">
                <li>
                    <button> GET IT NOW</button>

                    <ul class="sub-menu">
                        <li><a href="">APPLE MUSIC</a></li>
                        <li><a href="">ITUNES</a></li>
                        <li><a href="">SPOTIFY</a></li>
                        <li><a href="">TIDAL</a></li>
                        <li><a href="">GOOGLE PLAY</a></li>
                    </ul>
                </li>
            </ul>
        </div>


    </div>




</body>

<? include_once 'pages/m_footer.php'; ?>
</html>