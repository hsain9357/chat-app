<?php session_start(); ?>
<!doctype html>
<html>
    <head>
<?php
$shoudGetStartedButtonAppear = true;
$currPage = "contact";
?>
<?php //contact info

$info = [
    "location" => "Iraq",
    "email" => "hsain9357@gmail.com",
    "phoneNumber" => "+9647859753058",
    "facebookURL" => "https://www.facebook.com/nassosanagn/",
    "instaURL" => "https://www.instagram.com/nassosanagn_/?hl=el",
    "twitterURL" => "https://twitter.com/nassosanagn",
    "linkedinURL" =>
        "https://www.linkedin.com/in/nassos-anagnostopoulos-2b9631196/",
]; ?>


    <?php include_once "../util/header.php"; ?>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ChatMe | Contact Us </title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap');
    </style>
    <link rel="stylesheet" href="/css/contact.css">
    </head>
    <body>
<?php include_once "../util/header2.php"; ?>
        <section>
            <div class="container">
                <div class="contactInfo">
                    <div>
                        <h2>Contact Info</h2>
                        <ul class="info">
                            <li>
                                <span><img src="/resources/contact/location.png"></span>
                                <span><?php echo $info["location"]; ?></span>
                            </li>
                            <li>
                                <span><img src="/resources/contact/mail.png"></span>
                                <span><a href = "mailto: <?php echo $info[
                                    "email"
                                ]; ?>"><?php echo $info["email"]; ?></a></span>
                            </li>
                            <li>
                                <span><img src="/resources/contact/call.png"></span>
                                <span><?php echo $info["phoneNumber"]; ?></span>
                            </li>

                        </ul>
                    </div>
                    <ul class="sci">
                        <li><a href="<?php echo $info[
                            "facebookURL"
                        ]; ?>"><img src="/resources/contact/1.png"></a></li>
                        <li><a href="<?php echo $info[
                            "instaURL"
                        ]; ?>"><img src="/resources/contact/3.png"></a></li>
                        <li><a href="<?php echo $info[
                            "twitterURL"
                        ]; ?>"><img src="/resources/contact/2.png"></a></li>
                        <li><a href="<?php echo $info[
                            "linkedinURL"
                        ]; ?>"><img src="/resources/contact/5.png"></a></li>

                    </ul>
                </div>
                    <div class="contactForm">
                        <h2>Send a Message</h2>
                        <div class="formBox">
                        <div class="inputBox w50">
                            <input type="text" name="" required>
                            <span>First Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" required>
                            <span>Last Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="email" required>
                            <span>Email Address</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" required>
                            <span>Mobile Number</span>
                        </div>
                        <div class="inputBox w100">
                            <textarea required></textarea>
                            <span>Write your message here...</span>
                        </div>
                        <div class="inputBox w100">
                            <input type="submit" value="Send">
                        </div>
                    </div>
                </div>



        </section>
<?php include_once "../util/footer.php"; ?>
    </body>
</html>
