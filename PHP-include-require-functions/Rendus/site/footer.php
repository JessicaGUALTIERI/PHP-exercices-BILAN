<?php 
  $page = [
    'nav' => [
      'article1.php' => 'TinyMCE 4.2.7 : petites corrections pour l\'éditeur de texte WYSIWYG',
      // compléter ce tableau avec les liens vers les autres pages de votre site
      'article2.php' => 'Comment les bas salaires de nombreuses branches professionnelles se sont fait rattraper par le smic'
    ],
    'current' => basename($_SERVER['PHP_SELF']),
  ];
?>


  <footer>
      <?php
        foreach ($page['nav'] as $key => $value) {
            $active = "";
            if ($key == $page['current']) {
              $active =' class="active"';
            }
            echo '<a'.$active.' href="'.$key.'">'.$value.'</a>&emsp;&emsp;';
        }
      ?>
    </footer>
</body>