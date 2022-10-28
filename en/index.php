<?php
$page_title = "HelloPay";
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/head.php")
?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/en/header.php") ?>

<div class="hero">
  <div class="container container-relative">
    <div class="hero__content">
      <h1 class="heading-display heading-display-1">“Hello”<br>Payment System</h1>
      <p class="text">A group of payment services and organizations cooperating<br>under the Payment System Rules for the purpose of making money transfers</p>
    </div>
    <div class="hero__video">
      <video id="vid" autoplay loop muted playsinline>
        <source src="/assets/videos/hero.mp4" type="video/mp4">
      </video>
      <script>
        document.getElementById('vid').play();
      </script>
    </div>
  </div>
</div>
<div class="container main-content">
  <div class="tiles">
    <div class="tile tile-doc">
      <div class="tile__content">
        <h3 class="heading heading-medium">Payment system<br>documents</h3>
        <div>
          <a href="/en/documents/" class="button button-yellow">
            Read
          </a>
        </div>
      </div>
    </div>
    <div class="tile tile-lk-enter-simple">
      <div class="tile__content">
        <h3 class="heading heading-medium">Members login</h3>
        <div>
          <div class="button button-gray-bordered button-gray-bordered-disabled">
            Enter
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] .  "/includes/en/footer.php") ?>