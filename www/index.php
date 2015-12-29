<?php

include __DIR__."/model/news.php";

if (!empty($_POST["caption"])&&!empty($_POST["content"])){
    news_add($_POST);
    header("Location: /www");
}

$news = news_getAll();

include __DIR__."/view/newslist.php";