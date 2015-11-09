<?php

function isEmpty($var) {
    return isset($var) && $var == "";
}

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

    function htmlTopics($topics) {
        echo '
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    Topics
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">';
        foreach($topics as $topic) {
            echo'
                <li><a href="#">'
                .$topic
                .'</a></li>
            ';
        }
        echo '
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        ';
    }
}