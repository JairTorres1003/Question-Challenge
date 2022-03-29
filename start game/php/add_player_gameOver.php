<?php
$con_db = mysqli_connect("localhost", "root", "", "challenge_concurso de preguntas_y_respuestas");
if (isset($_REQUEST['to-accept_GO'])) {
    $namePlayer = $_POST['name_player'];
    $NameGame = $_POST['NameGame'];
    $scoreGameOver = $_POST['scoreGameOver']; 

    $insert_TB = "INSERT INTO tabla_de_clasificacion(
        id,     nombre,            partida,            puntaje) VALUES (
        'null', '$namePlayer', '$NameGame', '$scoreGameOver');";
    $rTB = mysqli_query($con_db, $insert_TB);

    header('Location:../../');
}
?>
