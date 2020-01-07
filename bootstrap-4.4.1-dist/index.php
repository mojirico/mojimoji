<?php
session_start();

if(!isset($_SESSION["user_name"])) {
	$no_login_url = "index.php";
	header("Location: {$no_login_url}");
	exit;
}
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <?php require 'header.php'; ?>
  <body>
    <div class="container-fluid">


    <div id="carouselExampleIndicators" class="carousel slide carousel-height top-main-slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/blueberry.jpeg" style="height: 370px" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/passion.jpeg" style="height: 370px" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/coffee.jpeg" style="height: 370px" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="container-md">
  </div>
  </div>
  </body>
</html>
