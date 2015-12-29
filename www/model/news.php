<?php

require_once __DIR__ . "/../functions/sql.php";

function news_getAll(){
    $sql = "SELECT * FROM news";
    return sql_select($sql);
}

function news_add($data){
    $sql = "INSERT INTO news VALUES (NULL, NOW(), '".$data["caption"]."', '".$data["content"]."')";
    return sql_exec($sql);
}

function news_delete($id){
    $sql = "DELETE FROM `news` WHERE `id` = ".$id;
    return sql_exec($sql);
}