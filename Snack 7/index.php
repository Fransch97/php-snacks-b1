<?php 
// Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

$alunni =[
    [
        "nome" => "Francesco",
        "cognome" => "Ercoli v. E.",
        "voti" => [
            4,
            5,
            6,
            4,
            4,
        ],
    ],
    [
        "nome" => "Rafael",
        "cognome" => "Rieder",
        "voti" => [
            7,
            8,
            6,
            9,
            7,
        ],
    ],
    [
        "nome" => "Julian",
        "cognome" => "Gross",
        "voti" => [
            7,
            4,
            6,
            9,
            7,
        ],
    ],
    [
        "nome" => "Geppetto",
        "cognome" => "Vecchettio",
        "voti" => [
            10,
            8,
            9,
            9,
            7,
        ],
    ],
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>
<body>
    <h1>Schede alunni</h1>
    <?php for($i = 0; $i < count($alunni); $i++) : ?>
        <ul>
            <li>Nome: <?php echo $alunni[$i]["nome"] ?></li>
            <li>Cognome: <?php echo $alunni[$i]["cognome"] ?></li>
            <li>Voti: <?php echo implode(" , ",$alunni[$i]["voti"]) ?> </li>
        </ul>
    <?php endfor;?>


</body>
</html>

                <!-- <ul>
                    #<?php #for($ii; $ii < count($alunni[$i]["voti"]); $ii++  ) :?>
                    #<li><?php #echo $alunni[$i]["voti"][$ii] ?></li>
                    #<?php # endfor; ?>
                </ul> -->