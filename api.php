<?php 
    $toDoList = file_get_contents("dati.json");

    header("Content-Type: application/json");

    echo $toDoList;

?>