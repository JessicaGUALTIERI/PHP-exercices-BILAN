<?php 
//ecrire vos fonctions ici

function the_title() {
    global $currentArticle;
      echo $currentArticle['title'];
  }
  
  function the_content() {
    global $currentArticle;
    echo '<p>' . $currentArticle['content'] .'</p>';
  }