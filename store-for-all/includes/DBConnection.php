<?php
$connect = new PDO("mysql:host=localhost;dbname=store_for_all;charset=utf8", "root", "");

function SQLQuery($q)
{
    global $connect;
    $statement = $connect->prepare($q);
    $statement->execute();
    return $statement->fetchAll();
}

function SQLWithData($query, $data)
{
    global $connect;
    $statement = $connect->prepare($query);
    $statement->execute($data);
    return $statement->fetchAll();
}

?>