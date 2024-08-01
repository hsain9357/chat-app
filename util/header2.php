<header class=" header <?php if($isLightText) {echo "light";}else{echo "dark";}; ?>">
<a href="/index.php"class="logo">
<img src="/resources/logo.png" alt="ChatMe logo" class="logo_img">
</a>
<ul class="navbar">

<li class="item <?php if($currPage == 'home') echo 'active'; ?>">
<a href="/index.php" class="home link">
Home
</a>

</li>
<li class="item <?php if($currPage == 'faqs') echo 'active'; ?>">
<a href="/page/faqs.php" class="link">
FAQs
</a>
</li>
<li class="item <?php if($currPage == 'contact') echo 'active'; ?>">
<a href="/page/contact.php" class="link">
Contact
</a>
</li>
</ul>
<?php
if($shoudGetStartedButtonAppear){

?>
<a href="/signup.php" class="signup button">Get Started</a>

<?php } ?>

<a href="#" class="humberger">
<div class="line"></div>
<div class="line middle"></div>
<div class="line"></div>
</a>

<?php if(isset($row['img'])) { ?>

<div class="profile_image_container">
<span><?php echo $row['fname']?><span class="activeImg">🟢</span></span>

<a href="#" class="profile_image">
          <img src="/php/images/<?php echo $row['img']; ?>" class ="profile_image" alt="">
</a>

<ul class="options">
<li>
<a href="">Change image</a>
</li>
<li>
<a href="/php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>

</li>
<li>
<a href="">Delete Account</a>
</li>
</ul>
</div>

<?php } ?>

</header>
