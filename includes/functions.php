<?php
function breadcrumbs($crumbs_array)
{
    echo "";
}

function random($from = 0, $to = 1262055681)
{
    return rand($from, $to);
}

function get_files($path)
{
    $results = scandir($path);
    foreach ($results as $result) {
        if (!is_dir($result)) {
            $file_path = $path . $result;
            $file_info = pathinfo($file_path);
            $size = round(filesize($path . $result) / 1024 / 1024, 2);

            preg_match('/\/.+\/(.+)\.+/', $file_path, $matches, PREG_OFFSET_CAPTURE);
?>
            <a href="<?= $file_path ?>" download class="file">
                <div class="file__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="50" viewBox="0 0 40 50">
                        <defs>
                            <clipPath id="clip-path">
                                <path id="Контур_198" data-name="Контур 198" d="M2,0H30.089L40,10V48a2,2,0,0,1-2,2H2a2,2,0,0,1-2-2V2A2,2,0,0,1,2,0Z" transform="translate(934 819)" fill="#fff" opacity="0.54" />
                            </clipPath>
                        </defs>
                        <g id="Сгруппировать_422" data-name="Сгруппировать 422" transform="translate(-1931 -896)">
                            <g id="Сгруппировать_418" data-name="Сгруппировать 418" transform="translate(997 77)">
                                <g id="Группа_масок_7" data-name="Группа масок 7" clip-path="url(#clip-path)">
                                    <rect id="Прямоугольник_314" data-name="Прямоугольник 314" width="40" height="50" rx="2" transform="translate(934 819)" fill="#c62828" />
                                </g>
                                <path id="Контур_200" data-name="Контур 200" d="M0,0,10,10H2A2,2,0,0,1,0,8Z" transform="translate(964 819)" fill="#800" />
                            </g>
                            <text id="PDF" transform="translate(1935 938)" fill="#fff" font-size="12" font-family="GothamPro-Bold, Gotham Pro" font-weight="700">
                                <tspan x="0" y="0">PDF</tspan>
                            </text>
                        </g>
                    </svg>
                </div>
                <div>
                    <p class="file__title">
                        <?= $matches[1][0] ?>
                    </p>
                    <span class="file__ext">
                        <?= "." . $file_info["extension"] . ", " . $size . " МБ" ?>
                    </span>
                </div>
            </a>
<?php
        }
    }
}
?>