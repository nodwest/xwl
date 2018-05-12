
<!doctype html>
<html lang="en">
<head>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XWL</title>
    
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/top_menu_formusic.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
   
</head>


<body> 
<? include_once "pages/top_menu.php"; ?>


    <script type="text/javascript">
        var r = /^\w+@\w+\.\w{2,4}$/i; 
        


        function yea() {
            var email, p, r;
            r = /^\w+@\w+\.\w{2,4}$/i;
            var danie = $("#form1").serialize();

// $("#form1").click(function(){
//     $.ajax({
//         url: "include/database.php",
//         type: "POST",
//         data:danie,
//         success: function(data) {

//         }
        
// });
// });


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

<div class="logo_container">
    <div class="logo"><h1>X W L</h1></div>
</div>
    <div class="thank_u" id="thu">
        <h3>THANK YOU</h3>
    </div>
    <form id="form1" action="" method="post">
        <div class="sign">
            <h3>STAY UP TO DATE WITH </h3>
            <h3> L Y T H. SIGN UP BELOW</h3>
            <input class="input_s" type="text"  placeholder=" INTER EMAIL" id="em">
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

<? include_once "pages/form.php"; ?>
<? include_once 'pages/m_footer.php'; ?>
</html>