<?php

    function getListMenuURL($tab) {
        echo '<ul>';
        foreach ($tab as $key => $value) {
            echo '<li><a href="';
            if (!empty($value)) {
                echo $value;
            } else {
                echo '#';
            }
            echo '">'.$key.'</a></li>';
        }
        echo '</ul>';
    }

    function getListMenu($tab) {
        echo '<ul>';
        foreach ($tab as $key) {
            echo '<li><a href="#">'.$key.'</a></li>';
        }
        echo '</ul>';
    }



?>