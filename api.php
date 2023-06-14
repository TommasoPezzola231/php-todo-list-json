<?php 
    $toDoList = file_get_contents("dati.json");

    
    $list = json_decode($toDoList, true);
    
    if ( isset($_POST["newTask"]) && $_POST["newTask"] != "") {
        $list[] = $_POST["newTask"];
        $toDoList = json_encode($list);
        file_put_contents("dati.json", $toDoList);
        
    } else if (isset($_POST["status"]) && $_POST["status"] != "") {

        $list[$_POST["status"]]["done"] = !$list[$_POST["status"]]["done"];
        $toDoList = json_encode($list);
        file_put_contents("dati.json", $toDoList);
    }
    
    $toDoList = json_encode($list);
    header("Content-Type: application/json");

    echo $toDoList;

?>