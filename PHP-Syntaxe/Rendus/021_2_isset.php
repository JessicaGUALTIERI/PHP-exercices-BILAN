<?php
/*
  Meme consigne que l'exercice précédent, corrigez ce code à l'aide de la fonction isset
 */

$article = array(
    'id' => 23,
    'title' => 'Les souris seraient-elle en réalité maîtres du monde ?',
    'content' => 'Lorem ipsum dolor sit amet, et eliptir consec dei lorem ipsum dolor sit amet et eliptir consec dei ... ',
);
?>
<html lang="fr">
    <head>
        <title>Isset 2</title>
    </head>
    <body>
        <h1>
            <?php echo isset( $article['title'] ) ? $article['title'] : 'Pas de titre.' ?>
        </h1>

        <p>
            <?php if( isset( $article['thumbnail'] ) ):?>
            <img src="<?php echo $article['thumbnail'] ?>"/>
            <?php endif; ?>

            <?php echo isset( $article['content'] ) ? $article['content'] : 'Pas de contenu.' ?>
        </p>
    </body>
</html>