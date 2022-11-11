<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");


function replaceEmpty($post, $value)
{
    return isset($post[$value]) ? $post[$value] : "Не указано";
}

try {
    $msgs = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $token = $config["TG_BOT_TOKEN"];
        $chat_id = $config["TG_CHAT_ID"];
        $form_name =  isset($_POST['form-name']) ? $_POST['form-name'] : null;
        $add =  isset($_POST['add']) ? $_POST['add'] : "";
        $txt = [];

        if (strlen($add) > 0) {
            $msgs['err'] = 'You shall not pass!';
            echo json_encode($msgs);

            return false;
        }

        if ($form_name === "contactform") {
            $name = replaceEmpty($_POST, "name");
            $phone = replaceEmpty($_POST, "contact");
            $lang = replaceEmpty($_POST, "lang");

            array_push(
                $txt,
                "<b>ФИО: </b>" . $name,
                "<b>Контакт: </b>" . $phone,
                "<b>Версия языка сайта: </b>" . $lang
            );
        }


        if (!empty($txt)) {
            $_txt = implode(
                "%0A",
                $txt
            );

            $sendTextToTelegram = file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$_txt}");

            if ($sendTextToTelegram) {
                $msgs['okSend'] = 'Успешно отправлено';
                echo json_encode($msgs);
                return true;
            } else {
                $msgs['err'] = 'Во время отправки возникла ошибка';
                echo json_encode($msgs);
            }
        }
    } else {
        header("Location: /");
    }

    unset($msgs);
    unset($txt);
} catch (Exception $e) {
    // echo $e->getMessage();
    $msgs['err'] = 'Во время отправки возникла ошибка.';
    echo json_encode($msgs);
}
