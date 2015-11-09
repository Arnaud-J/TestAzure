<?php

function htmlHead($title, $lang, $charset)
{
    $realTitle = !isEmpty($title) ? $title : "Default title";
    $realLang = !isEmpty($lang) ? $lang : "en";
    $realCharset = !isEmpty($charset) ? $charset : "UTF-8";
    echo '
        <!DOCTYPE html>
        <html>
            <head lang="'.$realLang.'">
                <meta charset="'.$realCharset.'">
                <title>'.$realTitle.'</title>
            </head>
            <body>
        ';
}

function htmlFoot() {
    echo '
            </body>
        </html>
    ';
}