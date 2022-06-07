<?php

$test = "ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.ciao come ti chiami? io francesco.";

$test_arr = explode(".",$test);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body style="text-align: center;">

    <?php for($i = 0; $i < count($test_arr); $i++) :?>
        <p><?php echo $test_arr[$i]."."?></p>
    <?php endfor; ?>

</body>