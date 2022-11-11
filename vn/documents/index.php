<?php
$page_title = "HelloPay";
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/head.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/functions.php");
?>





<div class="header-container header-container-shadowed">
  <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/vn/header.php") ?>
</div>
<div class="breadcrumbs-area">
  <div class="container">
    <div class="breadcrumbs">
      <span class="breadcrumb">
        <a class="breadcrumb__link" href="/vn/">Trang chính</a>
        <span class="breadcrumb__arrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10.667" viewBox="0 0 16 10.667">
            <g id="Главная" transform="translate(0 -0.526)">
              <g id="Index-_-catalog-_-prima_power" data-name="Index-/-catalog-/-prima_power" transform="translate(-179 -234)">
                <g id="Group-2" transform="translate(92 120)">
                  <g id="icons-_-system-_-middle_arrow" data-name="icons-/-system-/-middle_arrow" transform="translate(87 112)">
                    <path id="Combined-Shape-Copy" d="M2.939-7.106H16V-8.6H2.929L6.737-12.06a.326.326,0,0,0,.118-.246.324.324,0,0,0-.118-.246l-.589-.534a.392.392,0,0,0-.271-.107.394.394,0,0,0-.271.107L.118-8.106A.326.326,0,0,0,0-7.86a.324.324,0,0,0,.118.246L5.606-2.633a.393.393,0,0,0,.271.106.391.391,0,0,0,.271-.106l.589-.535a.324.324,0,0,0,.118-.246.321.321,0,0,0-.118-.245Z" transform="translate(16) rotate(180)" fill="#8a8a8a" fill-rule="evenodd" />
                  </g>
                </g>
              </g>
            </g>
          </svg>
        </span>
      </span>
      <h1 class="breadcrumb-title">Tài liệu</h1>
    </div>
  </div>
</div>
<div class="container main-content">
  <div class="docs">
    <div class="doc-row">
      <h3 class="heading heading-medium">Thỏa thuận thành viên</h3>
      <div class="files">
        <?= get_files($_SERVER['DOCUMENT_ROOT'] . "/assets/downloadable/en/") ?>
      </div>
    </div>
  </div>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/vn/footer.php") ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/end.php") ?>