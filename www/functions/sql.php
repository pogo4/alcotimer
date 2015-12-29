<?php

function sql_connect(){
    mysql_connect("localhost","root");
    return mysql_select_db("news");
}

function sql_select($sql){
    sql_connect();
    $resource = mysql_query($sql);
    $result = [];
    while ($row = mysql_fetch_assoc($resource)){
        $result[] = $row;
    }
    return $result;
}

function sql_exec($sql){
    sql_connect();
    return mysql_query($sql);
}
