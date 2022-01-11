<?php
$con_db = mysqli_connect("localhost", "root", "", "challenge_concurso de preguntas_y_respuestas");

$queryTC = "SELECT nombre, partida, puntaje FROM tabla_de_clasificacion ORDER BY puntaje DESC;";
$rqTC = mysqli_query($con_db, $queryTC);
# Recorrido de la tabla para traer toda la información
if ($rqTC) {
    $count = 0;
    while ($row = $rqTC->fetch_array()) {
        $count = $count + 1;
        $viewName = $row["nombre"];
        $viewRound = $row["partida"];
        $viewScore = $row["puntaje"];
        ?>
        <tr>
            <th scope="row"><?php echo $count; ?></th>
            <td><?php echo $viewName; ?></td>
            <td><?php echo $viewRound; ?></td>
            <td><?php echo $viewScore; ?></td>
        </tr>
        <?php
    }
}
?>
