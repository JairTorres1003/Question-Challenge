<?php
$con_db = mysqli_connect("	ik1eybdutgxsm0lo.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "p7w8823tke1weid4", "ns5sj7p3cukhk0m2", "challenge_concurso de preguntas_y_respuestas");
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
