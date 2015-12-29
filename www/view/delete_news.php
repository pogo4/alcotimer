<?php

require_once __DIR__."/../model/news.php";

if (isset($_GET["id"])){
    news_delete($_GET["id"]);
}

header ("Location: /www");