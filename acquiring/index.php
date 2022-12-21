<?php
$page_title = "HelloPay";
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/head.php")
?>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/ru/header.php") ?>

<script>
  $(document).ready(function() {
    $(".menu-area").remove()
    $(".lang").remove()

    var crumbTitle = $(".breadcrumb-title")
    var crumbArrow = $(".breadcrumb__arrow")
    var backArrows = $(".j-back-arrow, .j-back-arrow-floating")
    var secondaryArea = $(".secondary-area")
    var secondaryTabs = $(".acquiring")
    var mainSwitcher = $(".acquiring-switcher-main")

    crumbArrow.hide()

    backArrows.click(function() {
      crumbArrow.hide()
      crumbTitle.text("")
      secondaryArea.hide()
      mainSwitcher.show()
    })

    // Secondary tabs
    secondaryTabs.hide()

    secondaryTabs.each(function() {
      var _this = $(this)
      var tabIndex = _this.index()
      // Handle tabs switcher
      var tiles = _this.find(".acquiring-switcher .tile")
      var formContainer = _this.find(".acquiring-content")
      var form = formContainer.find(" .acquiring-content__item")
      mainSwitcher.find(".tile").eq(tabIndex - 1).find(".tile__image").clone().appendTo(tiles)

      for (let i = 0; i < tiles.length; i++) {
        form.clone().appendTo(formContainer)
      }

      tiles.eq(0).addClass("tile-active");
      tiles.click(function() {
        var i = $(this).index()
        tiles.removeClass("tile-active");
        $(this).addClass("tile-active")
        _this.find(".acquiring-content__item").hide().eq(i).show()
      })

      // First content tab
      _this.find(".acquiring-content .acquiring-content__item").eq(0).show()
    })

    mainSwitcher.find(".acquiring-switcher__button").click(function() {
      var _this = $(this)
      var text = _this.find(".heading").text()

      crumbTitle.text(text)
      secondaryArea.show()
      crumbArrow.show()

      mainSwitcher.hide()
      secondaryTabs.hide().eq(_this.index()).show()
    })


  });
</script>

<div class="hero hero-xs">
  <div class="container container-relative">
    <div class="hero__content">
      <h1 class="heading-display heading-display-1">Собираешься в отпуск?<br>
        Пополняй и плати с “Hello”</h1>
    </div>
    <div class="hero__crossing-fingers"></div>
  </div>
</div>

<div class="breadcrumbs-area breadcrumbs-area-pure">
  <div class="container">
    <div class="breadcrumbs breadcrumbs-force-inline">
      <span class="breadcrumb">
        <span class="breadcrumb__link j-back-arrow">Платежи и переводы</span>
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
      <h1 class="breadcrumb-title"></h1>
    </div>
  </div>
</div>

<div class="container main-content" style="padding-top: 0;">
  <div class="tiles tiles-y acquiring-switcher acquiring-switcher-main">
    <div class="tile tile-s tile-pointer acquiring-switcher__button">
      <div class="tile__content">
        <h4 class="heading heading-medium">Пополнение карт Visa / Mastercard</h4>
      </div>
      <div class="tile__image">
        <svg width="111" viewBox="0 0 111 71" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path opacity="0.75" fill-rule="evenodd" clip-rule="evenodd" d="M11.2208 15.8676C0.00230194 22.9272 -3.36919 37.7444 3.69032 48.9628L17.5578 71H94.9079C103.744 71 110.908 63.8366 110.908 55V16C110.908 7.16344 103.744 0 94.9079 0H36.4365L11.2208 15.8676Z" fill="#EAEAEA" />
          <path d="M54.6666 40H59.6666C60.1086 40 60.5325 39.8244 60.8451 39.5118C61.1577 39.1993 61.3333 38.7754 61.3333 38.3333C61.3333 37.8913 61.1577 37.4674 60.8451 37.1548C60.5325 36.8423 60.1086 36.6667 59.6666 36.6667H54.6666C54.2246 36.6667 53.8006 36.8423 53.4881 37.1548C53.1755 37.4674 52.9999 37.8913 52.9999 38.3333C52.9999 38.7754 53.1755 39.1993 53.4881 39.5118C53.8006 39.8244 54.2246 40 54.6666 40ZM74.6666 23.3333H51.3333C50.0072 23.3333 48.7354 23.8601 47.7977 24.7978C46.86 25.7355 46.3333 27.0073 46.3333 28.3333V43.3333C46.3333 44.6594 46.86 45.9312 47.7977 46.8689C48.7354 47.8066 50.0072 48.3333 51.3333 48.3333H74.6666C75.9927 48.3333 77.2644 47.8066 78.2021 46.8689C79.1398 45.9312 79.6666 44.6594 79.6666 43.3333V28.3333C79.6666 27.0073 79.1398 25.7355 78.2021 24.7978C77.2644 23.8601 75.9927 23.3333 74.6666 23.3333ZM76.3333 43.3333C76.3333 43.7754 76.1577 44.1993 75.8451 44.5118C75.5325 44.8244 75.1086 45 74.6666 45H51.3333C50.8912 45 50.4673 44.8244 50.1547 44.5118C49.8422 44.1993 49.6666 43.7754 49.6666 43.3333V33.3333H76.3333V43.3333ZM76.3333 30H49.6666V28.3333C49.6666 27.8913 49.8422 27.4674 50.1547 27.1548C50.4673 26.8423 50.8912 26.6667 51.3333 26.6667H74.6666C75.1086 26.6667 75.5325 26.8423 75.8451 27.1548C76.1577 27.4674 76.3333 27.8913 76.3333 28.3333V30Z" fill="#BBBBBB" />
        </svg>
      </div>
    </div>
    <div class="tile tile-s tile-pointer acquiring-switcher__button">
      <div class="tile__content">
        <h4 class="heading heading-medium">Покупка подарочных карт</h4>
      </div>
      <div class="tile__image">
        <svg width="111" viewBox="0 0 111 71" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path opacity="0.75" fill-rule="evenodd" clip-rule="evenodd" d="M11.2208 15.8676C0.00230194 22.9272 -3.36919 37.7444 3.69032 48.9628L17.5578 71H94.9079C103.744 71 110.908 63.8366 110.908 55V16C110.908 7.16344 103.744 0 94.9079 0H36.4365L11.2208 15.8676Z" fill="#EAEAEA" />
          <path d="M73 26.6667H72.4167C72.797 25.8879 72.9964 25.0333 73 24.1667C73.005 23.0055 72.6625 21.8695 72.0164 20.9047C71.3702 19.94 70.4502 19.1906 69.3746 18.7532C68.299 18.3158 67.1171 18.2103 65.981 18.4504C64.845 18.6904 63.8068 19.2649 63 20.1C62.1932 19.2649 61.155 18.6904 60.019 18.4504C58.8829 18.2103 57.701 18.3158 56.6254 18.7532C55.5498 19.1906 54.6298 19.94 53.9836 20.9047C53.3375 21.8695 52.995 23.0055 53 24.1667C53.0036 25.0333 53.203 25.8879 53.5833 26.6667H53C51.6739 26.6667 50.4021 27.1935 49.4645 28.1311C48.5268 29.0688 48 30.3406 48 31.6667V35C48 35.442 48.1756 35.8659 48.4882 36.1785C48.8007 36.4911 49.2246 36.6667 49.6667 36.6667H51.3333V46.6667C51.3333 47.9928 51.8601 49.2645 52.7978 50.2022C53.7355 51.1399 55.0073 51.6667 56.3333 51.6667H69.6667C70.9927 51.6667 72.2645 51.1399 73.2022 50.2022C74.1399 49.2645 74.6667 47.9928 74.6667 46.6667V36.6667H76.3333C76.7754 36.6667 77.1993 36.4911 77.5118 36.1785C77.8244 35.8659 78 35.442 78 35V31.6667C78 30.3406 77.4732 29.0688 76.5355 28.1311C75.5979 27.1935 74.3261 26.6667 73 26.6667ZM61.3333 48.3333H56.3333C55.8913 48.3333 55.4674 48.1577 55.1548 47.8452C54.8423 47.5326 54.6667 47.1087 54.6667 46.6667V36.6667H61.3333V48.3333ZM61.3333 33.3333H51.3333V31.6667C51.3333 31.2246 51.5089 30.8007 51.8215 30.4882C52.134 30.1756 52.558 30 53 30H61.3333V33.3333ZM61.3333 26.6667H58.8333C58.3389 26.6667 57.8555 26.52 57.4444 26.2453C57.0333 25.9706 56.7129 25.5802 56.5236 25.1234C56.3344 24.6666 56.2849 24.1639 56.3814 23.6789C56.4778 23.194 56.7159 22.7485 57.0656 22.3989C57.4152 22.0493 57.8607 21.8112 58.3456 21.7147C58.8306 21.6182 59.3332 21.6677 59.79 21.857C60.2469 22.0462 60.6373 22.3666 60.912 22.7777C61.1867 23.1889 61.3333 23.6722 61.3333 24.1667V26.6667ZM64.6667 24.1667C64.6667 23.6722 64.8133 23.1889 65.088 22.7777C65.3627 22.3666 65.7531 22.0462 66.21 21.857C66.6668 21.6677 67.1694 21.6182 67.6544 21.7147C68.1393 21.8112 68.5848 22.0493 68.9344 22.3989C69.2841 22.7485 69.5222 23.194 69.6186 23.6789C69.7151 24.1639 69.6656 24.6666 69.4764 25.1234C69.2871 25.5802 68.9667 25.9706 68.5556 26.2453C68.1445 26.52 67.6611 26.6667 67.1667 26.6667H64.6667V24.1667ZM71.3333 46.6667C71.3333 47.1087 71.1577 47.5326 70.8452 47.8452C70.5326 48.1577 70.1087 48.3333 69.6667 48.3333H64.6667V36.6667H71.3333V46.6667ZM74.6667 33.3333H64.6667V30H73C73.442 30 73.866 30.1756 74.1785 30.4882C74.4911 30.8007 74.6667 31.2246 74.6667 31.6667V33.3333Z" fill="#BBBBBB" />
        </svg>
      </div>
    </div>
    <div class="tile tile-s tile-pointer acquiring-switcher__button">
      <div class="tile__content">
        <h4 class="heading heading-medium">Пополнение сотовой связи СНГ</h4>
      </div>
      <div class="tile__image">
        <svg width="111" viewBox="0 0 111 71" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path opacity="0.75" fill-rule="evenodd" clip-rule="evenodd" d="M11.2208 15.8676C0.00230194 22.9272 -3.36919 37.7444 3.69032 48.9628L17.5578 71H94.9079C103.744 71 110.908 63.8366 110.908 55V16C110.908 7.16344 103.744 0 94.9079 0H36.4365L11.2208 15.8676Z" fill="#EAEAEA" />
          <path d="M64.1833 42.15L63.9333 41.95C63.8403 41.8869 63.7395 41.8365 63.6333 41.8L63.3333 41.6667C63.063 41.6102 62.7829 41.6217 62.5181 41.7002C62.2534 41.7788 62.0123 41.9219 61.8166 42.1167C61.6694 42.2787 61.551 42.4647 61.4666 42.6667C61.3405 42.9703 61.307 43.3045 61.3703 43.6272C61.4337 43.9499 61.5911 44.2466 61.8227 44.48C62.0544 44.7134 62.3499 44.873 62.672 44.9389C62.9942 45.0047 63.3286 44.9738 63.6333 44.85C63.8324 44.7534 64.0175 44.63 64.1833 44.4833C64.4145 44.249 64.5712 43.9513 64.6335 43.628C64.6958 43.3047 64.6609 42.9702 64.5333 42.6667C64.4502 42.4739 64.3314 42.2987 64.1833 42.15ZM69.6666 18.3333H56.3333C55.0072 18.3333 53.7354 18.8601 52.7977 19.7978C51.86 20.7355 51.3333 22.0073 51.3333 23.3333V46.6667C51.3333 47.9928 51.86 49.2645 52.7977 50.2022C53.7354 51.1399 55.0072 51.6667 56.3333 51.6667H69.6666C70.9927 51.6667 72.2644 51.1399 73.2021 50.2022C74.1398 49.2645 74.6666 47.9928 74.6666 46.6667V23.3333C74.6666 22.0073 74.1398 20.7355 73.2021 19.7978C72.2644 18.8601 70.9927 18.3333 69.6666 18.3333ZM71.3333 46.6667C71.3333 47.1087 71.1577 47.5326 70.8451 47.8452C70.5325 48.1577 70.1086 48.3333 69.6666 48.3333H56.3333C55.8912 48.3333 55.4673 48.1577 55.1547 47.8452C54.8422 47.5326 54.6666 47.1087 54.6666 46.6667V23.3333C54.6666 22.8913 54.8422 22.4674 55.1547 22.1548C55.4673 21.8423 55.8912 21.6667 56.3333 21.6667H69.6666C70.1086 21.6667 70.5325 21.8423 70.8451 22.1548C71.1577 22.4674 71.3333 22.8913 71.3333 23.3333V46.6667Z" fill="#BBBBBB" />
        </svg>
      </div>
    </div>
    <div class="tile tile-s tile-pointer acquiring-switcher__button">
      <div class="tile__content">
        <h4 class="heading heading-medium">Пополнение электронных кошельков</h4>
      </div>
      <div class="tile__image">
        <svg width="111" viewBox="0 0 111 71" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path opacity="0.75" fill-rule="evenodd" clip-rule="evenodd" d="M11.2208 15.8676C0.00230194 22.9272 -3.36919 37.7444 3.69032 48.9628L17.5578 71H94.9079C103.744 71 110.908 63.8366 110.908 55V16C110.908 7.16344 103.744 0 94.9079 0H36.4365L11.2208 15.8676Z" fill="#EAEAEA" />
          <path d="M74.6666 26.6667H72.9999V25C72.9999 23.6739 72.4731 22.4021 71.5355 21.4645C70.5978 20.5268 69.326 20 67.9999 20H51.3333C50.0072 20 48.7354 20.5268 47.7977 21.4645C46.86 22.4021 46.3333 23.6739 46.3333 25V45C46.3333 46.3261 46.86 47.5979 47.7977 48.5355C48.7354 49.4732 50.0072 50 51.3333 50H74.6666C75.9927 50 77.2644 49.4732 78.2021 48.5355C79.1398 47.5979 79.6666 46.3261 79.6666 45V31.6667C79.6666 30.3406 79.1398 29.0688 78.2021 28.1311C77.2644 27.1935 75.9927 26.6667 74.6666 26.6667ZM51.3333 23.3333H67.9999C68.4419 23.3333 68.8659 23.5089 69.1784 23.8215C69.491 24.134 69.6666 24.558 69.6666 25V26.6667H51.3333C50.8912 26.6667 50.4673 26.4911 50.1547 26.1785C49.8422 25.866 49.6666 25.442 49.6666 25C49.6666 24.558 49.8422 24.134 50.1547 23.8215C50.4673 23.5089 50.8912 23.3333 51.3333 23.3333ZM76.3333 40H74.6666C74.2246 40 73.8006 39.8244 73.4881 39.5118C73.1755 39.1993 72.9999 38.7754 72.9999 38.3333C72.9999 37.8913 73.1755 37.4674 73.4881 37.1548C73.8006 36.8423 74.2246 36.6667 74.6666 36.6667H76.3333V40ZM76.3333 33.3333H74.6666C73.3405 33.3333 72.0687 33.8601 71.1311 34.7978C70.1934 35.7355 69.6666 37.0072 69.6666 38.3333C69.6666 39.6594 70.1934 40.9312 71.1311 41.8689C72.0687 42.8065 73.3405 43.3333 74.6666 43.3333H76.3333V45C76.3333 45.442 76.1577 45.866 75.8451 46.1785C75.5325 46.4911 75.1086 46.6667 74.6666 46.6667H51.3333C50.8912 46.6667 50.4673 46.4911 50.1547 46.1785C49.8422 45.866 49.6666 45.442 49.6666 45V29.7167C50.202 29.905 50.7656 30.0008 51.3333 30H74.6666C75.1086 30 75.5325 30.1756 75.8451 30.4882C76.1577 30.8007 76.3333 31.2246 76.3333 31.6667V33.3333Z" fill="#BBBBBB" />
        </svg>
      </div>
    </div>
  </div>


  <div class="secondary-area">
    <div class="j-back-arrow-floating back-arrow-yellow">
      <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/acquiring/content/back-arrow.php") ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/acquiring/content/deposit.php") ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/acquiring/content/gift_card.php") ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/acquiring/content/mobile.php") ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/acquiring/content/e_wallet.php") ?>
  </div>
</div>



<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/end.php") ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/ru/footer.php") ?>
<div class="payment-logos">
  <div class="container">
    <div class="payment-logo-groups">
      <div class="payment-logo-group">
        <div class="payment-logo">
          <?= require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/images/payment/mir.svg") ?>
        </div>
        <div class="payment-logo">
          <?= require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/images/payment/mc.svg") ?>
        </div>
        <div class="payment-logo">
          <?= require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/images/payment/visa.svg") ?>
        </div>
      </div>
      <div class="payment-logo-group">
        <div class="payment-logo">
          <?= require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/images/payment/g-pay.svg") ?>
        </div>
        <div class="payment-logo">
          <?= require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/images/payment/mir-accept.svg") ?>
        </div>
        <div class="payment-logo">
          <?= require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/images/payment/mc-secure-code.svg") ?>
        </div>
        <div class="payment-logo">
          <?= require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/images/payment/visa-verified.svg") ?>
        </div>
      </div>
    </div>
  </div>
</div>