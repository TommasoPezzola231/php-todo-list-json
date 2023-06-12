<?php 
    $toDoList = [
        [
            "text" => "Fare la spesa",
            "done" => true
        ],
        [
            "text" => "Portare a spasso il cane",
            "done" => true
        ],
        [
            "text" => "Stendere i panni",
            "done" => false
        ],
        [
            "text" => "Chiamare Giovanni",
            "done" => true
        ],
        [
            "text" => "Prenotare il ristorante",
            "done" => false
        ]
    ];

    header("Content-Type: application/json");

    $list = json_encode($toDoList);

    echo $list
?>