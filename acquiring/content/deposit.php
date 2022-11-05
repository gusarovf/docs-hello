<!-- Пополнение карт Visa / Mastercard -->
<div class="acquiring">
    <div class="acquiring-switcher tiles tiles-y">
        <div class="tile tile-s tile-pointer acquiring-switcher__button">
            <div class="tile__content">
                <h4 class="heading heading-medium">
                    Узбекистан UZCARD и HUMO
                </h4>
            </div>
        </div>
        <div class="tile tile-s tile-pointer acquiring-switcher__button">
            <div class="tile__content">
                <h4 class="heading heading-medium">
                    Казахстан Visa / Mastercard
                </h4>
            </div>
        </div>
    </div>

    <div class="acquiring-content">
        <div class="acquiring-content__item">
            <form class="payform">
                <?php require($_SERVER['DOCUMENT_ROOT'] . "/acquiring/card.php") ?>
                <div class="misc-area">
                    <input type="text" class="input input-simple" placeholder="Номер карты получателя">
                    <input type="text" class="input input-simple" placeholder="Cумма">
                    <input type="text" class="input input-simple" placeholder="Email">
                </div>
                <?php require($_SERVER['DOCUMENT_ROOT'] . "/acquiring/content/confirm_checkbox.php") ?>

                <div class="button button-yellow">
                    Оплатить
                </div>
            </form>
        </div>
    </div>
</div>