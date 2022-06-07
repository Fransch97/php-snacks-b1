<?php

$partite = [
    [
        "ospite" => "bolzano",
        "casa" => "milano",
        "ospitePoints" => 23,
        "casaPoints" => 11
    ],
    [
        "ospite" => "xinhua",
        "casa" => "milano",
        "ospitePoints" => 13,
        "casaPoints" => 32
    ],
    [
        "ospite" => "sicilia",
        "casa" => "calciobarilla",
        "ospitePoints" => 4,
        "casaPoints" => 2
    ],
    [
        "ospite" => "nihao",
        "casa" => "analisi",
        "ospitePoints" => 43,
        "casaPoints" => 41
    ],
    [
        "ospite" => "aldrino",
        "casa" => "mila",
        "ospitePoints" => 33,
        "casaPoints" => 11
    ]
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <h1>Partite giocate </h1>

    <?php for($i = 0; $i< count($partite); $i++): ?>
        <ul>
            <li>Casa: <?php echo $partite[$i]["casa"] ?></li>
            <li>Ospite: <?php echo $partite[$i]["ospite"] ?></li>
            <li>ospitePoints: <?php echo $partite[$i]["ospitePoints"] ?></li>
            <li>casaPoints: <?php echo $partite[$i]["casaPoints"] ?></li>
        </ul>
        <?php endfor;?>


</body>
</html>