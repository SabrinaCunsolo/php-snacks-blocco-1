<!-- PHP Snack 1:
Creare un array $matches che contiene dei sotto-array, i quali rappresentano delle partite di basket.
ogni partita avrà le seguenti caratteristiche:
squadra di casa
squadra ospite
punti fatti dalla squadra di casa
punti fatti dalla squadra ospite
L'obbiettivo è stampare a schermo tutte le partite utilizzando questo schema:
[squadra di casa] - [squadra ospite] | [punti squadra di casa] - [punti squadra ospite]
ad esempio:
Olimpia Milano - Cantù | 55 - 60
Nome repo: php-snacks-blocco-1 -->

<!-- creo array $matches con sotto array con partite di basket -->
<?php
    $matches = [
        [
            'squadra_di_casa' => 'Olimpia Milano',
            'squadra_ospite' => 'Cantù',
            'punti_squadra_di_casa' => 55,
            'punti_squadra_ospite' => 60,
        ],
        [
            'squadra_di_casa' => 'Allianz Trieste',
            'squadra_ospite' => 'A-X Armani Exchange Milano',
            'punti_squadra_di_casa' => 60,
            'punti_squadra_ospite' => 61,
        ],
        [
            'squadra_di_casa' => 'Banco di Sardegna Sassari',
            'squadra_ospite' => 'DeLonghi Treviso',
            'punti_squadra_di_casa' => 48,
            'punti_squadra_ospite' => 50,
        ],
        [
            'squadra_di_casa' => 'Dolomiti Energia Trento',
            'squadra_ospite' => 'Fortitudo Lavoropiù Bologna',
            'punti_squadra_di_casa' => 58,
            'punti_squadra_ospite' => 60,
        ],
        [
            'squadra_di_casa' => 'Germani Basket Brescia',
            'squadra_ospite' => 'Happy Casa Brindisi',
            'punti_squadra_di_casa' => 45,
            'punti_squadra_ospite' => 61,
        ],
    ];
?>

<!-- stampo le partite concatenando i dati da inserire -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP Snack1</title>
    </head>
    <body>
        <h2>Partite di Basket:</h2>
        <h4>
            <?php
                foreach ($matches as $partita) {
                    // echo $partita ['squadra_di_casa'] . ' - ' . $partita ['squadra_ospite'] . ' | ' . $partita ['punti_squadra_di_casa'] . ' - ' . $partita ['punti_squadra_ospite'] . '<pre></pre>' . '<br>';

                    var_dump ($partita ['squadra_di_casa'] . ' - ' . $partita ['squadra_ospite'] . ' | ' . $partita ['punti_squadra_di_casa'] . ' - ' . $partita ['punti_squadra_ospite'] . '<pre></pre>' . '<br>');
                };
            ?>
        </h4>
    </body>
</html>
