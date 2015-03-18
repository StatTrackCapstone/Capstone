<?php

echo '<form id="plyrUpdate" action="../Model/admin.php?pageid=1" Method="Post">';

    echo '<fieldset>';
        echo '<input type="submit" value= "Update Players"/>';
    echo '</fieldset>';

echo '</form>';

echo '<form id="teamUpdate" action="../Model/admin.php?pageid=4" Method="Post">';

    echo '<fieldset>';
        echo '<input type="submit" value= "Update Teams"/>';
    echo '</fieldset>';

echo '</form>';
echo '<form id="addPlayer" action="../Model/admin.php?pageid=3" Method="Post">';

    echo '<fieldset>';
        echo '<input type="submit" value= "Add Player"/>';
    echo '</fieldset>';

echo '</form>';

?>