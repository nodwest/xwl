

<div class="content_top_menu">
<div class="top_menu">
<div class="column_top ct-0"><a href="/app/Index.php">
            
            
            <button class="btn_lgn"><h3><i class="fas fa-language"></i></h3></button>
            <ul class="leguage">
            <a href="/app/pages/ru/indexru.php"><button> <li>РУССКИЙ</li></button></a>
            <a href="/app/index.php"><button> <li>ENGLISH</li> </button></a>

            </ul>
        </a></div>
    <div class="column_top ct-1"><a href="/app/Index.php">
            <h3>XWL</h3>
        </a></div>
    <div class="column_top"><a href="/app/Index.php">
            <h3>HOME</h3>
        </a></div>
    <div class="column_top"><a href="/app/pages/music.php">
            <h3>MUSIC</h3>
        </a></div>
    <div class="column_top"><a href="/app/pages/videos.php">
            <h3>VIDEOS</h3>
        </a></div>
    <div class="column_top"><a href="/app/pages/tour.php">
            <h3>TOUR</h3>
        </a></div>
    <div class="column_top ct-4" ><a href="">
            <h3>SOCIALS</h3>
        </a></div>
   
</div>

</div>
<style>
    @font-face {
    font-family: "TimesNewRomans";
    src: url("../fonts/HelveticaLTStd-Light.ttf") format("truetype");
    font-style: normal;
    font-weight: normal; 
    }
    .column_top:hover {
        text-transform: uppercase;
        animation: blur .75s ease-out infinite;
        text-shadow: 0px 0px 5px #fff, 0px 0px 7px #fff;
    }

    @keyframes blur {
        from {
            text-shadow:0px 0px 10px #fff,
            0px 0px 10px #fff,
            0px 0px 25px #fff,
            0px 0px 25px #fff,
            0px 0px 25px #fff,
            0px 0px 25px #fff,
            0px 0px 25px #fff,
            0px 0px 25px #fff,
            0px 0px 50px #fff,
            0px 0px 50px #fff,
            0px 0px 50px #7B96B8,
            0px 0px 150px #7B96B8,
            0px 10px 100px #7B96B8,
            0px 10px 100px #7B96B8,
            0px 10px 100px #7B96B8,
            0px 10px 100px #7B96B8,
            0px -10px 100px #7B96B8,
            0px -10px 100px #7B96B8;
        }
    }


ul.leguage {
  z-index: 9999;
  position: absolute;
  background-color: black;
  width: 50px;
  display: none;
  list-style-type: none; }

.ct-0:hover ul.leguage {
  display: block; }

.ct-0 button {
  background-color: inherit;
  border: none ;
  color: white }

.btn_lgn {
  font-size: 20px; }

ul.leguage li {
  margin-top: 2%; }

</style>