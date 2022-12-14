<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $page_title ?></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat:wght@500;600;700&display=swap');
    </style>
    <link rel="stylesheet" href="/assets/css/style.css?v=3">
    <script src="/assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#menu-button").click(function() {
                $("#menu").toggle();
            })
        });
    </script>
</head>

<body>
    <div class="main" id="main">