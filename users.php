<?php
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
            }
?>

<?php

$shoudGetStartedButtonAppear =  false;
$isDarkText = true;
$styleMain = true;
?>
<?php include_once "./util/header.php"; ?>
<link rel="stylesheet" href="/css/users.css">


<body class='chat'>
<?php include_once "./util/header2.php"; ?>
<div class="wrapper userswrapper <?php echo isset($_GET['user_id'])?"actv":"" ?>">
    <section class="users">
      <header class="chat">
        <div class="content">
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
<div class="options_container">
        <button class="options_humb ">
<span class="dot"></span>
<span class="dot"></span>
<span class="dot"></span>
</button>
<ul class="options dropdown ">
<li>
<a href="">Change image</a>
</li>
<li>
<a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>

</li>
<li>
<a href="">Delete Account</a>
</li>
</ul>
</div>
      </header>
      <div class="search">
        <span class="text">Select a user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
      </div>
    </section>
  </div>

  <script src="javascript/users.js" async></script>

<!-- chat section starts-->
    <div class="wrapper chatwrapper <?php echo isset($_GET['user_id'])?"actv":"notactv" ?>">
    <section class="chat-area">
      <header>
<?php
if(!isset($_GET['user_id'])){
echo "<h1 style='position:absolute; top:50%; left:50%; transform:translate(-50%,-50%)'>No Chat Selected</h1>";
}

?>
<?php
if(isset($_GET['user_id'])){

?>
        <?php
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="php/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>

      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>

  <script src="javascript/chat.js"></script>
<?php
}
?>
</div>
<!-- chat section ends-->

</body>
</html>
