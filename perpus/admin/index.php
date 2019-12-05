<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}
$conn = mysqli_connect("localhost","root","","db_perpus");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <title>Admin</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Administrator</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="<?="?p=buku"; ?>"?>Buku</a>
      </li>
      <li>
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<?php
  if(@$_GET["p"] == "logout"){
    include "logout.php";
  }else if(@$_GET["p"] == "buku"){
    include "buku.php";
  }else if(@$_GET["p"] == "bukuadd"){
    include"bukuadd.php";
  }else if(@$_GET["p"]== "bukudel"){
    include "bukudel.php";
  }else if(@$_GET["p"] =="bukuedit"){
    include "bukuedit.php";
  }else{
    include "home.php";
  }
 ?>
  </body>
</html>