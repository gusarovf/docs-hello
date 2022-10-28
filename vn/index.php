<?php
$page_title = "HelloPay";
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/head.php")
?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/vn/header.php") ?>

<div class="hero">
  <div class="container container-relative">
    <div class="hero__content">
      <h1 class="heading-display heading-display-1">Cổng thanh toán<br />"Hello"</h1>
      <p class="text">Một tập hợp các dịch vụ thanh toán và các tổ chức tương tác theo<br>Quy tắc của Hệ thống Thanh toán để thực hiện công việc chuyển tiền</p>
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
        <h3 class="heading heading-medium">Tài liệu cổng thanh toán</h3>
        <div>
          <a href="/vn/documents/" class="button button-yellow">
            Xem
          </a>
        </div>
      </div>
    </div>
    <div class="tile tile-lk-enter-simple">
      <div class="tile__content">
        <h3 class="heading heading-medium">Đăng nhập cho thành viên cổng thanh toán</h3>
        <div>
          <div class="button button-gray-bordered button-gray-bordered-disabled">
            Đăng nhập
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/vn/footer.php") ?>