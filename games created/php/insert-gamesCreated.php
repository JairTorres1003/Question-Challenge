<?php
$con_db = mysqli_connect("localhost", "root", "", "challenge_concurso de preguntas_y_respuestas");

$queryGC = "SELECT id, nombre FROM partidas_creadas;";
$rqGC = mysqli_query($con_db, $queryGC);
# Recorrido de la tabla para traer toda la información
if ($rqGC) {
    while ($row = $rqGC->fetch_array()) {
        $viewId = $row["id"];
        $viewName = $row["nombre"];
        ?>
        <tr>
            <th scope="row"><?php echo $viewId; ?></th>
            <td><?php echo $viewName; ?></td>
            <td><i class="fas fa-play play" value="<?php echo $viewId; ?>"></i></td>
        </tr>
        <?php
    }
}
?>