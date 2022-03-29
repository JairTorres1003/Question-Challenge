<?php
$con_db = mysqli_connect("localhost", "root", "", "challenge_concurso de preguntas_y_respuestas");
$val = include('../php/play_game.php');

$gamePlay = $val;
#consulta para traer una pregunta aleatoria por nivel
$QueryLvl1 = "SELECT * FROM preguntas_y_respuestas WHERE id_partida = $gamePlay AND nivel = 1 ORDER BY rand() LIMIT 1;";
$QueryLvl2 = "SELECT * FROM preguntas_y_respuestas WHERE id_partida = $gamePlay AND nivel = 2 ORDER BY rand() LIMIT 1;";
$QueryLvl3 = "SELECT * FROM preguntas_y_respuestas WHERE id_partida = $gamePlay AND nivel = 3 ORDER BY rand() LIMIT 1;";
$QueryLvl4 = "SELECT * FROM preguntas_y_respuestas WHERE id_partida = $gamePlay AND nivel = 4 ORDER BY rand() LIMIT 1;";
$QueryLvl5 = "SELECT * FROM preguntas_y_respuestas WHERE id_partida = $gamePlay AND nivel = 5 ORDER BY rand() LIMIT 1;";

$rqLvl1 = mysqli_query($con_db, $QueryLvl1);
$rqLvl2 = mysqli_query($con_db, $QueryLvl2);
$rqLvl3 = mysqli_query($con_db, $QueryLvl3);
$rqLvl4 = mysqli_query($con_db, $QueryLvl4);
$rqLvl5 = mysqli_query($con_db, $QueryLvl5);

if ($rqLvl1) {  
    $rowValL1 = $rqLvl1->fetch_array();
    $viewL1Level = $rowValL1['nivel'];
    $viewL1Question = $rowValL1['pregunta'];
    $viewL1Answer_1 = $rowValL1['respuesta_1'];
    $viewL1Answer_2 = $rowValL1['respuesta_2'];
    $viewL1Answer_3 = $rowValL1['respuesta_3'];
    $viewL1Answer_4 = $rowValL1['respuesta_4'];
    $viewL1CorrectAnswer = $rowValL1['respuesta_correcta'];
}
if ($rqLvl2) {  
    $rowValL2 = $rqLvl2->fetch_array();
    $viewL2Level = $rowValL2['nivel'];
    $viewL2Question = $rowValL2['pregunta'];
    $viewL2Answer_1 = $rowValL2['respuesta_1'];
    $viewL2Answer_2 = $rowValL2['respuesta_2'];
    $viewL2Answer_3 = $rowValL2['respuesta_3'];
    $viewL2Answer_4 = $rowValL2['respuesta_4'];
    $viewL2CorrectAnswer = $rowValL2['respuesta_correcta'];
}
if ($rqLvl3) {  
    $rowValL3 = $rqLvl3->fetch_array();
    $viewL3Level = $rowValL3['nivel'];
    $viewL3Question = $rowValL3['pregunta'];
    $viewL3Answer_1 = $rowValL3['respuesta_1'];
    $viewL3Answer_2 = $rowValL3['respuesta_2'];
    $viewL3Answer_3 = $rowValL3['respuesta_3'];
    $viewL3Answer_4 = $rowValL3['respuesta_4'];
    $viewL3CorrectAnswer = $rowValL3['respuesta_correcta'];
}
if ($rqLvl4) {  
    $rowValL4 = $rqLvl4->fetch_array();
    $viewL4Level = $rowValL4['nivel'];
    $viewL4Question = $rowValL4['pregunta'];
    $viewL4Answer_1 = $rowValL4['respuesta_1'];
    $viewL4Answer_2 = $rowValL4['respuesta_2'];
    $viewL4Answer_3 = $rowValL4['respuesta_3'];
    $viewL4Answer_4 = $rowValL4['respuesta_4'];
    $viewL4CorrectAnswer = $rowValL4['respuesta_correcta'];
}
if ($rqLvl5) {  
    $rowValL5 = $rqLvl5->fetch_array();
    $viewL5Level = $rowValL5['nivel'];
    $viewL5Question = $rowValL5['pregunta'];
    $viewL5Answer_1 = $rowValL5['respuesta_1'];
    $viewL5Answer_2 = $rowValL5['respuesta_2'];
    $viewL5Answer_3 = $rowValL5['respuesta_3'];
    $viewL5Answer_4 = $rowValL5['respuesta_4'];
    $viewL5CorrectAnswer = $rowValL5['respuesta_correcta'];
}
$queryP = "SELECT nombre, puntos_l1, puntos_l2, puntos_l3, puntos_l4, puntos_l5 FROM partidas_creadas WHERE Id = $gamePlay;";

$rqP = mysqli_query($con_db, $queryP);
if ($rqP) {
    $rowValP = $rqP->fetch_array();
    $viewNameGame = $rowValP['nombre'];
    $viewPointLvl1 = $rowValP['puntos_l1'];
    $viewPointLvl2 = $rowValP['puntos_l2'];
    $viewPointLvl3 = $rowValP['puntos_l3'];
    $viewPointLvl4 = $rowValP['puntos_l4'];
    $viewPointLvl5 = $rowValP['puntos_l5'];
}
?>
<script>
    var main_Quiz = [
        level1 = {
            question: "<?php echo $viewL1Question; ?>",
            answer1: "<?php echo $viewL1Answer_1; ?>",
            answer2: "<?php echo $viewL1Answer_2; ?>",
            answer3: "<?php echo $viewL1Answer_3; ?>",
            answer4: "<?php echo $viewL1Answer_4; ?>",
            answer: "<?php echo $viewL1CorrectAnswer; ?>",
        },
        level2 = {
            question: "<?php echo $viewL2Question; ?>",
            answer1: "<?php echo $viewL2Answer_1; ?>",
            answer2: "<?php echo $viewL2Answer_2; ?>",
            answer3: "<?php echo $viewL2Answer_3; ?>",
            answer4: "<?php echo $viewL2Answer_4; ?>",
            answer: "<?php echo $viewL2CorrectAnswer; ?>",
        },
        level3 = {
            question: "<?php echo $viewL3Question; ?>",
            answer1: "<?php echo $viewL3Answer_1; ?>",
            answer2: "<?php echo $viewL3Answer_2; ?>",
            answer3: "<?php echo $viewL3Answer_3; ?>",
            answer4: "<?php echo $viewL3Answer_4; ?>",
            answer: "<?php echo $viewL3CorrectAnswer; ?>",
        },
        level4 = {
            question: "<?php echo $viewL4Question; ?>",
            answer1: "<?php echo $viewL4Answer_1; ?>",
            answer2: "<?php echo $viewL4Answer_2; ?>",
            answer3: "<?php echo $viewL4Answer_3; ?>",
            answer4: "<?php echo $viewL4Answer_4; ?>",
            answer: "<?php echo $viewL4CorrectAnswer; ?>",
        },
        level5 = {
            question: "<?php echo $viewL5Question; ?>",
            answer1: "<?php echo $viewL5Answer_1; ?>",
            answer2: "<?php echo $viewL5Answer_2; ?>",
            answer3: "<?php echo $viewL5Answer_3; ?>",
            answer4: "<?php echo $viewL5Answer_4; ?>",
            answer: "<?php echo $viewL5CorrectAnswer; ?>",
        },
        pointsLvl = [
            "<?php echo $viewNameGame; ?>",
            <?php echo $viewPointLvl1; ?>,
            <?php echo $viewPointLvl2; ?>,
            <?php echo $viewPointLvl3; ?>,
            <?php echo $viewPointLvl4; ?>,
            <?php echo $viewPointLvl5; ?>
        ]
    ]
    const set_question = document.getElementsByClassName('set_question')[0];
    const answer = document.getElementsByClassName('answer');
    const set_level = document.getElementById('set_level');
    var numLevel = 0;
    var totalScore = 0;
    insertQuizLevel(0);
    function insertQuizLevel(level) {
        set_level.innerHTML = "Nivel " + (numLevel + 1);
        set_question.innerHTML = main_Quiz[level].question;
        answer[0].innerHTML = main_Quiz[level].answer1;
        answer[1].innerHTML = main_Quiz[level].answer2;
        answer[2].innerHTML = main_Quiz[level].answer3;
        answer[3].innerHTML = main_Quiz[level].answer4;
        totalScore = totalScore + main_Quiz[5][level + 1];
    }
    const to_accept = document.getElementById('to-accept');
    const set_score = document.getElementById('set_score');
    const modal_continue = document.getElementsByClassName('modal_continue')[0];
    const modal_gameOver = document.getElementsByClassName('modal_gameOver')[0];
    const score_gameOver = document.getElementById('score-gameOver');
    const to_accept_GO = document.getElementById('to-accept_GO');
    const scoreGameOver = document.getElementsByClassName('scoreGameOver')[0];
    const NameGame = document.getElementsByClassName('NameGame')[0];
    to_accept.addEventListener('click', function(e){
        numLevel = numLevel + 1;
        if (numLevel < 5) {
            var get_answer = document.querySelectorAll('.select_answer')[0].textContent;
            let answer =  main_Quiz[numLevel - 1].answer;
            if (get_answer == answer) {
                modal_continue.classList.remove('disabled_block');
            } else {
                modal_gameOver.classList.remove('disabled_block');
                score_gameOver.innerHTML = "Puntaje: 0";
                numLevel = numLevel - 1;
                scoreGameOver.setAttribute('value', '0');
                NameGame.setAttribute('value', main_Quiz[5][0]);
            }
        } else {
            var get_answer = document.querySelectorAll('.select_answer')[0].textContent;
            let answer =  main_Quiz[numLevel - 1].answer;
            if (get_answer == answer) {
                modal_gameOver.classList.remove('disabled_block');
                score_gameOver.innerHTML = "Puntaje: " + totalScore;
                scoreGameOver.setAttribute('value', totalScore);
                NameGame.setAttribute('value', main_Quiz[5][0]);
            } else {
                modal_gameOver.classList.remove('disabled_block');
                score_gameOver.innerHTML = "Puntaje: 0";
                scoreGameOver.setAttribute('value', '0');
                NameGame.setAttribute('value', main_Quiz[5][0]);
            }
        }
    });
    const to_Leave = document.getElementById('to-Leave');
    const to_next = document.getElementById('to-next');
to_Leave.addEventListener('click', function(e){
    modal_gameOver.classList.remove('disabled_block');
    score_gameOver.innerHTML = "Puntaje: " + totalScore;
    scoreGameOver.setAttribute('value', totalScore);
    NameGame.setAttribute('value', main_Quiz[5][0]);
});
to_next.addEventListener('click', function(e){
    modal_continue.classList.add('disabled_block');
    set_score.innerHTML = "Puntaje: " + totalScore;
    insertQuizLevel(numLevel);
    removeSelect();
});
const name_player = document.getElementById('name-player');
to_accept_GO.addEventListener('click', function(e){
    if (name_player.value == "") {
        e.preventDefault();
    } else{
        modal_gameOver.classList.add('disabled_block');
    }
});
</script>
