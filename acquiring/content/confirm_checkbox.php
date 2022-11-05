<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/functions.php");

$confirm_id = random();
?>

<div class="checkbox-area">
    <input type="checkbox" name="confirm" id="<?= $confirm_id ?>">
    <label for="<?= $confirm_id ?>">Подтверждаю корректность введенных данных</label>
</div>