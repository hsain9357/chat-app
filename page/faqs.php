<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- displays site properly based on user's device -->

    <?php $shoudGetStartedButtonAppear = true; $currPage = "faqs"; ?> <?php
    include_once "../util/header.php"; ?>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link href="/css/faqs.css" rel="stylesheet" />
  </head>

  <title>ChatMe | FAQs</title>

  <body>
    <?php include_once "../util/header2.php"; ?>
    <div id="background">
      <div id="accordion-container-wrapper">
        <div id="accordion-container">
          <div id="image-container">
            <img
              alt=""
              class="image-shadow mobile"
              src="../resources/bg-pattern-mobile.svg"
            />
            <img
              alt=""
              class="image mobile"
              src="../resources/illustration-woman-online-mobile.svg"
            />
            <img
              alt=""
              class="image-shadow desktop"
              src="../resources/bg-pattern-desktop.svg"
            />
            <img
              alt=""
              class="image desktop"
              src="../resources/illustration-woman-online-desktop.svg"
            />
            <div id="box-container">
              <img
                alt=""
                id="box"
                src="../resources/illustration-box-desktop.svg"
              />
            </div>
          </div>
          <div id="accordion-FAQ-container">
            <h1 id="FAQ-heading">FAQ</h1>
            <div class="accordion-child-container">
              <input type="checkbox" name="clickable area to reveal answer" />
              <img
                alt="clickable arrow"
                class="dropdown-arrow"
                src="../resources/icon-arrow-down.svg"
              />
              <p class="question">What is ChatMe?</p>
              <p class="answer">
                ChatMe is an online chat application that allows users to send
                messages and communicate in real-time friends, family, or
                colleagues.
              </p>
            </div>

            <div class="accordion-child-container">
              <input type="checkbox" name="clickable area to reveal answer" />
              <img
                alt="clickable arrow"
                class="dropdown-arrow"
                src="../resources/icon-arrow-down.svg"
              />
              <p class="question">Is ChatMe free to use?</p>
              <p class="answer">
                Yes, ChatMe is free to use. However, we may offer premium
                features or subscriptions for enhanced functionality. .
              </p>
            </div>

            <div class="accordion-child-container">
              <input type="checkbox" name="clickable area to reveal answer" />
              <img
                alt="clickable arrow"
                class="dropdown-arrow"
                src="../resources/icon-arrow-down.svg"
              />
              <p class="question">Can I use ChatMe on multiple devices?

    </p>
              <p class="answer">
Yes, you can use ChatMe on multiple devices. Just log in with the same account credentials on each device.

              </p>
            </div>
            <div class="accordion-child-container">
              <input type="checkbox" name="clickable area to reveal answer" />
              <img
                alt="clickable arrow"
                class="dropdown-arrow"
                src="../resources/icon-arrow-down.svg"
              />
              <p class="question">Can I delete my account?</p>
              <p class="answer">
            Yes, after registration you can click on your logo to show the options and click delete account.

              </p>
            </div>

            <div class="accordion-child-container">
              <input type="checkbox" name="clickable area to reveal answer" />
              <img
                alt="clickable arrow"
                class="dropdown-arrow"
                src="../resources/icon-arrow-down.svg"
              />
              <p class="question">Are my messages secure?

    </p>
              <p class="answer">Yes, we use end-to-end encryption to ensure that your messages are secure and can only be read by the intended recipients.
</p>
            </div>

            <div class="accordion-child-container">
              <input type="checkbox" name="clickable area to reveal answer" />
              <img
                alt="clickable arrow"
                class="dropdown-arrow"
                src="../resources/icon-arrow-down.svg"
              />
              <p class="question">Do you provide additional support?</p>
              <p class="answer">
                Chat and email support is available 24/7. Phone lines are open
                during normal business hours.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include_once "../util/footer.php"; ?>
  </body>
</html>
