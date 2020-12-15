<!-- PHP Snack 2:
Passare 3 parametri GET: name, mail e age e verificare (cercando nella documentazione i metodi che non conosciamo) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
// creo tre param get
$name = $_GET ['Name'];
$mail = $_GET ['Mail'];
$age = $_GET ['Age'];

//name > di 3 caratteri

//mail deve contenere . e @

//age deve essere un NumberFormatter

//se verifiche -> ok, stampare accesso riuscito

//se verifiche -> ko, stampare accesso negato
?>
