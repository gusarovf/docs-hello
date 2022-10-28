<?php
$page_title = "HelloPay";

$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$lang_check_cookie = "lang_check";

if (!isset($_COOKIE[$lang_check_cookie])) {
  switch ($lang) {
    case "ru":
      setcookie($lang_check_cookie, 1, strtotime("+1 year"));
      break;
    case "en":
      setcookie($lang_check_cookie, 1, strtotime("+1 year"));
      header("Location: /en/");
      break;
    case "tr":
      setcookie($lang_check_cookie, 1, strtotime("+1 year"));
      header("Location: /tr/");
      break;
    case "vi":
      setcookie($lang_check_cookie, 1, strtotime("+1 year"));
      header("Location: /vn/");
      break;
    default:
      setcookie($lang_check_cookie, 1, strtotime("+1 year"));
      header("Location: /en/");
      break;
  }
}

require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/head.php")
?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/ru/header.php") ?>

<div class="hero">
  <div class="container container-relative">
    <div class="hero__content">
      <h1 class="heading-display heading-display-1">Платежная система<br>“Hello”</h1>
      <p class="text">Cовокупность платежных сервисов и организаций,<br>
        взаимодействующих по Правилам Платежной Системы<br>
        в целях осуществления переводов денежных средств</p>
    </div>
    <div class="hero__video">
      <video id="vid" autoplay loop muted playsinline>
        <source src="assets/videos/hero.mp4" type="video/mp4">
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
        <h3 class="heading heading-medium">Документы<br>
          платежной системы</h3>
        <div>
          <a href="/documents/" class="button button-yellow">
            Посмотреть
          </a>
        </div>
      </div>
    </div>
    <div class="tile tile-lk-enter-simple">
      <div class="tile__content">
        <h3 class="heading heading-medium">Вход для участников<br>
          платежной системы</h3>
        <div>
          <div class="button button-gray-bordered button-gray-bordered-disabled">
            Вход
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/ru/footer.php") ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/end.php") ?>