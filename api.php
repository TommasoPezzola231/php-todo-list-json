<?php 
    $toDoList = file_get_contents("dati.json");

    header("Content-Type: application/json");

    $list = json_decode($toDoList, true);
    
    if ( isset($_POST["newTask"]) && $_POST["newTask"] != "") {
        $list[] = $_POST["newTask"];
        $toDoList = json_encode($list);
        file_put_contents("dati.json", $toDoList);

    }

    $toDoList = json_encode($list);

    echo $toDoList;

?>