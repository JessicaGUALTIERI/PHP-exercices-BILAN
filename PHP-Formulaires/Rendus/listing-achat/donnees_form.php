<?php
    if (isset($_POST['matos']) && isset($_POST['desc']) && isset($_POST['date']) && isset($_POST['prix'])) {
        echo '<p>Le '.$_POST['date'].', j\'ai acheté : '.$_POST['matos'].' '.$_POST['desc'].' pour '.$_POST['prix'].'.</p>';
    }
?>