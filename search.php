<?php

$db =new PDO("sqlite:db.sqlite");

/**
* поиск автокомплит
**/
function search_autocomplete(){
    global $db;
    $search =$_GET['term'];
    $res = $db -> query("SELECT name  FROM test WHERE name LIKE '%{$search}%'  LIMIT 101");
    $result_search = array();
    while($row = $res -> fetch(PDO::FETCH_ASSOC)){
        $result_search[] = array('label' => $row['name']);
    }
    return $result_search;
}

if(!empty($_GET['term'])){
    $search = search_autocomplete();
    exit( json_encode($search) );
}

if(!empty($_GET['search'])){
    echo "Поиск по запросу <b>{$_GET['search']}</b>...";
}