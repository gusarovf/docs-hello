<?php
$page_title = "HelloPay";
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/head.php")
?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/tr/header.php") ?>

<div class="hero">
  <div class="container container-relative">
    <div class="hero__content">
      <h1 class="heading-display heading-display-1">"Hello"<br>Ödeme Sistemi</h1>
      <p class="text">
        Para transferleri gerçekleştirmek için Ödeme Sistemi Kurallarına<br>göre etkileşimde bulunan bir dizi ödeme servisleri ve kuruluşları </p>
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
        <h3 class="heading heading-medium">Ödeme sistemi belgeleri</h3>
        <div>
          <a href="/tr/documents/" class="button button-yellow">
            Göster
          </a>
        </div>
      </div>
    </div>
    <div class="tile tile-lk-enter-simple">
      <div class="tile__content">
        <h3 class="heading heading-medium">Ödeme sistemi katılımcıları için giriş</h3>
        <div>
          <div class="button button-gray-bordered button-gray-bordered-disabled">
            Giriş
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/tr/footer.php") ?>