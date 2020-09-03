<?php

    /* laço for */

    /*
    for ($i=0; $i<10; $i++) {
        echo $i."<br>";
    }

    echo "<br>";

    for ($i=0; $i<20; $i+=5) {
        echo $i."<br>";
    }
    */
    ////////////////////////////////

    // exemplo prático: usando PHP para criar uma lista suspensa (comando select) no HTML

    echo "<select>";

    for ($i=date("Y"); $i > date("Y")-100; $i--) {
        echo '<option value="'.$i.'">'.$i.'</option>';
    }

    echo "</select>";

?>