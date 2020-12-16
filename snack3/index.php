<!-- PHP snack3:
Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato: DD/MM/YYYY (ad es 31/01/2007) e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post. -->
<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP Snack3</title>
    </head>
    <body>
        <h1>Lista dei post</h1>
            <?php
                foreach ($posts as $date => $date_posts) {
            ?>

            <h2> <?php echo $date; ?> </h2>

                <?php
                    foreach ($date_posts as $post) {
                ?>

                <h3> <?php echo $post['title']; ?> </h3>
                <h3> <?php echo $post['text']; ?> </h3>
                <h3> <?php echo $post['author']; ?> </h3>

            <?php
            }
            }
            ?>
    </body>
</html>
