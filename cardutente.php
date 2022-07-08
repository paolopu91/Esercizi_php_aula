<?php

$team = [
    [
        "name" => "Fabio",
        "lastName" => "Mario",
        "role" => "Manager",
    ],
    [
        "name" => "Paolo",
        "lastName" => "Mario",
        "role" => "Manager",
    ],
    [
        "name" => "Laura",
        "lastName" => "Mario",
        "role" => "Manager",
    ],
    [
        "name" => "Teemo",
        "lastName" => "Mario",
        "role" => "Manager",
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">

    <div class="row">

    <?php
    for($i; $i < count($team); $i++){
        $utenteCorrente = $team[$i];
    ?>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                    <?php echo $utenteCorrente["name"] . " " . $utenteCorrente["lastName"]?>
                        <div class="card-text">
                            <?php echo $utenteCorrente["role"]?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php } ?> 
    </div>

    </div>
</body>
</html>