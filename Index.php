<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XWL</title>

    <link rel="stylesheet" href="css/main.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</head>

	
    <? include_once 'pages/m_header.php'; ?>



    <? include_once 'pages/m_sidebar.php' ?>


<body>


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
        p.innerHTML = "dasdsa";
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


<div class="bottom_wrap">
    <div class="block1">
        <img src="img/spase_al.jpg" width="100%" alt="">
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