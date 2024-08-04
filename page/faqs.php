<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- displays site properly based on user's device -->

<?php
$shoudGetStartedButtonAppear = true;
$currPage = "faqs";
?>
  <?php include_once "../util/header.php"; ?>
  <link rel="icon" type="image/png" sizes="32x32" href="../resources/favicon-32x32.png">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link href="/css/faqs.css" rel="stylesheet">

</head>

  <title>ChatMe | FAQs</title>

<body>
<?php include_once "../util/header2.php"; ?>
  <div id="background">
    <div id=accordion-container-wrapper>
      <div id="accordion-container">
        <div id="image-container">
          <img alt="" class="image-shadow mobile" src="../resources/bg-pattern-mobile.svg">
          <img alt="" class="image mobile"  src="../resources/illustration-woman-online-mobile.svg">
          <img alt="" class="image-shadow desktop" src="../resources/bg-pattern-desktop.svg">
          <img alt="" class="image desktop"  src="../resources/illustration-woman-online-desktop.svg">
          <div id="box-container">
            <img alt="" id="box" src="../resources/illustration-box-desktop.svg">
          </div>

        </div>
        <div id="accordion-FAQ-container">
          <h1 id="FAQ-heading">FAQ</h1>

          <div class="accordion-child-container">

            <input type="checkbox" name="clickable area to reveal answer">
            <img alt="clickable arrow" class="dropdown-arrow" src="../resources/icon-arrow-down.svg">
            <p class="question">How many team members can I invite?</p>
              <p class="answer">You can invite up to 2 additional users on the Free plan. There is no limit on
                team members for the Premium plan.</p>
          </div>

          <div class="accordion-child-container">
            <input type="checkbox" name="clickable area to reveal answer">
            <img alt="clickable arrow" class="dropdown-arrow" src="../resources/icon-arrow-down.svg">
            <p class="question">What is the maximum file upload size?</p>
              <p class="answer">No more than 2GB. All files in your account must fit your allotted storage space.</p>
          </div>

          <div class="accordion-child-container">
            <input type="checkbox" name="clickable area to reveal answer">
            <img alt="clickable arrow" class="dropdown-arrow" src="../resources/icon-arrow-down.svg">
            <p class="question">How do I reset my password?</p>
              <p class="answer">Click “Forgot password” from the login page or “Change password” from your profile page.
                A reset link will be emailed to you.</p>
          </div>

          <div class="accordion-child-container">
            <input type="checkbox" name="clickable area to reveal answer">
            <img alt="clickable arrow" class="dropdown-arrow" src="../resources/icon-arrow-down.svg">
            <p class="question">Can I cancel my subscription?</p>
              <p class="answer">Yes! Send us a message and we’ll process your request no questions asked.</p>
          </div>

          <div class="accordion-child-container">
            <input type="checkbox" name="clickable area to reveal answer">
            <img alt="clickable arrow" class="dropdown-arrow" src="../resources/icon-arrow-down.svg">
            <p class="question">Do you provide additional support?</p>
              <p class="answer">Chat and email support is available 24/7. Phone lines are open during normal business hours.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include_once "../util/footer.php"; ?>
</body>

</html>
