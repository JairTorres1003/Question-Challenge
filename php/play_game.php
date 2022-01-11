<?php
if (isset($_REQUEST['playGame'])) {
    $numGame = $_POST['val_game'];
    $GLOBALS["numGame"];
    echo $numGame;
    header('Location:../start game/');
}
?>