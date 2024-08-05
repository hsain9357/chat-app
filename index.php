<?php
session_start();
if(isset($_GET['del'])){
echo "<script>alert('Your Account Was Deleted Seccessfuly!')

window.location = '/';
</script>";

}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/resources/logo.svg" type="image/x-icon">
    <link rel="apple-touch-icon" href="/resources/logo.svg">
    <link rel="stylesheet" href="/css/header.css" />
    <link rel="stylesheet" href="/css/index.css" />
    <link rel="stylesheet" href="/css/footer.css" />
    <link rel="preload" as="image" href="/resources/banner.jpg">
    <script src="./util/header.js" async></script>
    <title>ChatMe</title>
  </head>
  <body class="home"  >
    <?php $shoudGetStartedButtonAppear = true; $currPage = "home"; $isLightText
    = true; ?> <? include_once "./util/header2.php" ?>
    <section class="banner">
      <div class="bg-img">
        <img
          src="./resources/banner.jpg"
          alt="background image"
          class="img"
        />
      </div>
      <div class="slogan">
        <h2>
          Connect with your friends <br />
          and family
        </h2>
        <a href="/signup.php" class="button signup">Get Started</a>
      </div>
    </section>
    <style>
    </style>
    <?php include_once "./util/footer.php"; ?>
    <script src="./javascript/index.js"></script>
  </body>
</html>
