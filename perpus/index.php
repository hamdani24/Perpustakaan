<?php
$conn = mysqli_connect("localhost","root","","db_perpus");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Perpustakaan</title>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel= "stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo" style="color: black;">Perpustakaan </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php" style="color: black">Home</a></li>
        <li><a href="buku.php" style="color: black;">Buku</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">PERPUSTAKAAN</h1>
        <br><br>

      </div>
    </div>
    <div class="container">
    <div class=""><img src="img/ww.png" style="height: 350px; width: 100%;"></div>
    </div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <h5 class="left-align light">
              <i class="material-icons">
                          home
                </i> Jln. Dahlia No.19 Piliang
          </h5>
          <h5 class="left-align light">
              <i class="material-icons">
                          call
                </i> +6281930159697
          </h5>
          <h5 class="left-align light">
              <i class="material-icons">
                          email
                </i> dani.archery24@gmail.com
          </h5>
        </div>
      </div>

    </div>
  </div>
  
  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
          <div class="col l6 s12">
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="js/materialize.min.js"></script>

  <script>
    const parallax = document.query.SelectorAll('.parallax');
    M.Parallax.init(parallax);
  </script>
  </body>
</html>
