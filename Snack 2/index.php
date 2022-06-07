<?php
$key_name = $_GET["name"];
$key_mail = $_GET["mail"];
$key_age = $_GET["age"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
     <h1>Controllo</h1>
    <form method="get">
        <label> Inserisci nome </label>
        <input type="text" name="name">
        <label> Inserisci mail</label>
        <input type="text" name="mail">
        <label> Inserisci età </label>
        <input type="text" name="age">
        <button type="submit"> vai</button>
        <br>
        <br>
        <br>
        <br>
    </form>
    <?php
    if(strlen($key_name) >= 3){
        echo "$key_name è più lungo di 3 caratteri <br>";
    }else{
        echo "$key_name non è più lungo di 3 caratteri <br>";
    }
    
    
    if(strpos($key_mail, ".") and strpos($key_mail, "@")){
        echo "$mail contiene un . <br>";
    }else{
        echo "la mail non contiene @ e/.<br>";
    }
    
    if(is_numeric($key_age)){
        echo "$key_age è un numero <br>";
    }else{
        echo "$key_age non è un numero<br>";
    }
    
    if(count($key_name) <= 3 and strpos($key_mail, ".") and strpos($key_mail, "@") and is_numeric($key_age)){
        echo "Accesso riuscito";
    }else{
        echo "Accesso negato";
    }
    
    ?>
</body>
</html>