<!-- PHP Snack 2:
Passare 3 parametri GET: name, mail e age e verificare (cercando nella documentazione i metodi che non conosciamo) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
// creo tre param get
$name = $_GET ['name'];
$mail = $_GET ['mail'];
$age = $_GET ['age'];

//name > di 3 caratteri - strlen ritorna lungh stringa
$nomeOk = strlen ($name) > 3;
//mail deve contenere . e @ - strpos cerca stringa dentro stringa e ritorna posiz
$mailOk = strpos ($mail, '.') !== false && strpos ($mail, '@') !== false;
//age deve essere un numero - is_numeric trova se una variabile è un numero o una stringa numerica
$ageOk = (is_numeric ($age) && $age > 0 && $age < 120);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP Snack2</title>
    </head>
    <body>
        <h1>
            <?php
                //se verifiche -> ok, stampare accesso riuscito
                if ($nomeOk && $mailOk && $ageOk) {
                    echo "Accesso riuscito";
                //se verifiche -> ko, stampare accesso negato
                } else {
                    echo "Accesso negato";
                };
            ?>
        </h1>
    </body>
</html>
