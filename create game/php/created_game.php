<?php
$con_db = mysqli_connect("localhost", "root", "", "challenge_concurso de preguntas_y_respuestas");
if (isset($_REQUEST['to_accept'])) {
    # Nombre de la partida
    $nameGame = $_POST['name_game']; #1
    # Definir puntos por nivel
    $pointsL1 = $_POST['level_one']; #2
    $pointsL2 = $_POST['level_two']; #3
    $pointsL3 = $_POST['level_three']; #4
    $pointsL4 = $_POST['level_four']; #5
    $pointsL5 = $_POST['level_five']; #6
    #Nivel 1 --------------------------------------------------------------------
    #Pregunta, respuestas  y respuesta correcta 1
    $Question1 = $_POST['question_1']; #7
    $Answer1_1 = $_POST['answer_1_1']; #8
    $Answer1_2 = $_POST['answer_1_2']; #9
    $Answer1_3 = $_POST['answer_1_3']; #10
    $Answer1_4 = $_POST['answer_1_4']; #11
    $Radio_1 = $_POST['radio_1'];
    $Answer_correct1 = $_POST[$Radio_1];
    #Pregunta, respuestas  y respuesta correcta 2
    $Question2 = $_POST['question_2']; #12
    $Answer2_1 = $_POST['answer_2_1']; #13
    $Answer2_2 = $_POST['answer_2_2']; #14
    $Answer2_3 = $_POST['answer_2_3']; #15
    $Answer2_4 = $_POST['answer_2_4']; #16
    $Radio_2 = $_POST['radio_2'];
    $Answer_correct2 = $_POST[$Radio_2];
    #Pregunta, respuestas  y respuesta correcta 3
    $Question3 = $_POST['question_3']; #17
    $Answer3_1 = $_POST['answer_3_1']; #18
    $Answer3_2 = $_POST['answer_3_2']; #19
    $Answer3_3 = $_POST['answer_3_3']; #20
    $Answer3_4 = $_POST['answer_3_4']; #21
    $Radio_3 = $_POST['radio_3'];
    $Answer_correct3 = $_POST[$Radio_3];
    #Pregunta, respuestas  y respuesta correcta 4
    $Question4 = $_POST['question_4']; #22
    $Answer4_1 = $_POST['answer_4_1']; #23
    $Answer4_2 = $_POST['answer_4_2']; #24
    $Answer4_3 = $_POST['answer_4_3']; #25
    $Answer4_4 = $_POST['answer_4_4']; #26
    $Radio_4 = $_POST['radio_4'];
    $Answer_correct4 = $_POST[$Radio_4];
    #Pregunta, respuestas  y respuesta correcta 5
    $Question5 = $_POST['question_5']; #27
    $Answer5_1 = $_POST['answer_5_1']; #28
    $Answer5_2 = $_POST['answer_5_2']; #29
    $Answer5_3 = $_POST['answer_5_3']; #30
    $Answer5_4 = $_POST['answer_5_4']; #31
    $Radio_5 = $_POST['radio_5'];
    $Answer_correct5 = $_POST[$Radio_5];
    #Nivel 2 --------------------------------------------------------------------
    #Pregunta, respuestas  y respuesta correcta 1
    $Question6 = $_POST['question_6']; #32
    $Answer6_1 = $_POST['answer_6_1']; #33
    $Answer6_2 = $_POST['answer_6_2']; #34
    $Answer6_3 = $_POST['answer_6_3']; #35
    $Answer6_4 = $_POST['answer_6_4']; #36
    $Radio_6 = $_POST['radio_6'];
    $Answer_correct6 = $_POST[$Radio_6];
    #Pregunta, respuestas  y respuesta correcta 2
    $Question7 = $_POST['question_7']; #37
    $Answer7_1 = $_POST['answer_7_1']; #38
    $Answer7_2 = $_POST['answer_7_2']; #39
    $Answer7_3 = $_POST['answer_7_3']; #40
    $Answer7_4 = $_POST['answer_7_4']; #41
    $Radio_7 = $_POST['radio_7'];
    $Answer_correct7 = $_POST[$Radio_7];
    #Pregunta, respuestas  y respuesta correcta 3
    $Question8 = $_POST['question_8']; #42
    $Answer8_1 = $_POST['answer_8_1']; #43
    $Answer8_2 = $_POST['answer_8_2']; #44
    $Answer8_3 = $_POST['answer_8_3']; #45
    $Answer8_4 = $_POST['answer_8_4']; #46
    $Radio_8 = $_POST['radio_8'];
    $Answer_correct8 = $_POST[$Radio_8];
    #Pregunta, respuestas  y respuesta correcta 4
    $Question9 = $_POST['question_9']; #47
    $Answer9_1 = $_POST['answer_9_1']; #48
    $Answer9_2 = $_POST['answer_9_2']; #49
    $Answer9_3 = $_POST['answer_9_3']; #50
    $Answer9_4 = $_POST['answer_9_4']; #51
    $Radio_9 = $_POST['radio_9'];
    $Answer_correct9 = $_POST[$Radio_9];
    #Pregunta, respuestas  y respuesta correcta 5
    $Question10 = $_POST['question_10']; #52
    $Answer10_1 = $_POST['answer_10_1']; #53
    $Answer10_2 = $_POST['answer_10_2']; #54
    $Answer10_3 = $_POST['answer_10_3']; #55
    $Answer10_4 = $_POST['answer_10_4']; #56
    $Radio_10 = $_POST['radio_10'];
    $Answer_correct10 = $_POST[$Radio_10];
    #Nivel 3 --------------------------------------------------------------------
    #Pregunta, respuestas  y respuesta correcta 1
    $Question11 = $_POST['question_11']; #57
    $Answer11_1 = $_POST['answer_11_1']; #58
    $Answer11_2 = $_POST['answer_11_2']; #59
    $Answer11_3 = $_POST['answer_11_3']; #60
    $Answer11_4 = $_POST['answer_11_4']; #61
    $Radio_11 = $_POST['radio_11'];
    $Answer_correct11 = $_POST[$Radio_11];
    #Pregunta, respuestas  y respuesta correcta 2
    $Question12 = $_POST['question_12']; #62
    $Answer12_1 = $_POST['answer_12_1']; #63
    $Answer12_2 = $_POST['answer_12_2']; #64
    $Answer12_3 = $_POST['answer_12_3']; #65
    $Answer12_4 = $_POST['answer_12_4']; #66
    $Radio_12 = $_POST['radio_12'];
    $Answer_correct12 = $_POST[$Radio_12];
    #Pregunta, respuestas  y respuesta correcta 3
    $Question13 = $_POST['question_13']; #67
    $Answer13_1 = $_POST['answer_13_1']; #68
    $Answer13_2 = $_POST['answer_13_2']; #69
    $Answer13_3 = $_POST['answer_13_3']; #70
    $Answer13_4 = $_POST['answer_13_4']; #71
    $Radio_13 = $_POST['radio_13'];
    $Answer_correct13 = $_POST[$Radio_13];
    #Pregunta, respuestas  y respuesta correcta 4
    $Question14 = $_POST['question_14']; #72
    $Answer14_1 = $_POST['answer_14_1']; #73
    $Answer14_2 = $_POST['answer_14_2']; #74
    $Answer14_3 = $_POST['answer_14_3']; #75
    $Answer14_4 = $_POST['answer_14_4']; #76
    $Radio_14 = $_POST['radio_14'];
    $Answer_correct14 = $_POST[$Radio_14];
    #Pregunta, respuestas  y respuesta correcta 5
    $Question15 = $_POST['question_15']; #77
    $Answer15_1 = $_POST['answer_15_1']; #78
    $Answer15_2 = $_POST['answer_15_2']; #79
    $Answer15_3 = $_POST['answer_15_3']; #80
    $Answer15_4 = $_POST['answer_15_4']; #81
    $Radio_15 = $_POST['radio_15'];
    $Answer_correct15 = $_POST[$Radio_15];
    #Nivel 4 --------------------------------------------------------------------
    #Pregunta, respuestas  y respuesta correcta 1
    $Question16 = $_POST['question_16']; #82
    $Answer16_1 = $_POST['answer_16_1']; #83
    $Answer16_2 = $_POST['answer_16_2']; #84
    $Answer16_3 = $_POST['answer_16_3']; #85
    $Answer16_4 = $_POST['answer_16_4']; #86
    $Radio_16 = $_POST['radio_16'];
    $Answer_correct16 = $_POST[$Radio_16];
    #Pregunta, respuestas  y respuesta correcta 2
    $Question17 = $_POST['question_17']; #87
    $Answer17_1 = $_POST['answer_17_1']; #88
    $Answer17_2 = $_POST['answer_17_2']; #89
    $Answer17_3 = $_POST['answer_17_3']; #90
    $Answer17_4 = $_POST['answer_17_4']; #91
    $Radio_17 = $_POST['radio_17'];
    $Answer_correct17 = $_POST[$Radio_17];
    #Pregunta, respuestas  y respuesta correcta 3
    $Question18 = $_POST['question_18']; #92
    $Answer18_1 = $_POST['answer_18_1']; #93
    $Answer18_2 = $_POST['answer_18_2']; #94
    $Answer18_3 = $_POST['answer_18_3']; #95
    $Answer18_4 = $_POST['answer_18_4']; #96
    $Radio_18 = $_POST['radio_18'];
    $Answer_correct18 = $_POST[$Radio_18];
    #Pregunta, respuestas  y respuesta correcta 4
    $Question19 = $_POST['question_19']; #97
    $Answer19_1 = $_POST['answer_19_1']; #98
    $Answer19_2 = $_POST['answer_19_2']; #99
    $Answer19_3 = $_POST['answer_19_3']; #100
    $Answer19_4 = $_POST['answer_19_4']; #101
    $Radio_19 = $_POST['radio_19'];
    $Answer_correct19 = $_POST[$Radio_19];
    #Pregunta, respuestas  y respuesta correcta 5
    $Question20 = $_POST['question_20']; #102
    $Answer20_1 = $_POST['answer_20_1']; #103
    $Answer20_2 = $_POST['answer_20_2']; #104
    $Answer20_3 = $_POST['answer_20_3']; #105
    $Answer20_4 = $_POST['answer_20_4']; #106
    $Radio_20 = $_POST['radio_20'];
    $Answer_correct20 = $_POST[$Radio_20];
    #Nivel 5 --------------------------------------------------------------------
    #Pregunta, respuestas  y respuesta correcta 1
    $Question21 = $_POST['question_21']; #107
    $Answer21_1 = $_POST['answer_21_1']; #108
    $Answer21_2 = $_POST['answer_21_2']; #109
    $Answer21_3 = $_POST['answer_21_3']; #110
    $Answer21_4 = $_POST['answer_21_4']; #111
    $Radio_21 = $_POST['radio_21'];
    $Answer_correct21 = $_POST[$Radio_21];
    #Pregunta, respuestas  y respuesta correcta 2
    $Question22 = $_POST['question_22']; #112
    $Answer22_1 = $_POST['answer_22_1']; #113
    $Answer22_2 = $_POST['answer_22_2']; #114
    $Answer22_3 = $_POST['answer_22_3']; #115
    $Answer22_4 = $_POST['answer_22_4']; #116
    $Radio_22 = $_POST['radio_22'];
    $Answer_correct22 = $_POST[$Radio_22];
    #Pregunta, respuestas  y respuesta correcta 3
    $Question23 = $_POST['question_23']; #117
    $Answer23_1 = $_POST['answer_23_1']; #118
    $Answer23_2 = $_POST['answer_23_2']; #119
    $Answer23_3 = $_POST['answer_23_3']; #120
    $Answer23_4 = $_POST['answer_23_4']; #121
    $Radio_23 = $_POST['radio_23'];
    $Answer_correct23 = $_POST[$Radio_23];
    #Pregunta, respuestas  y respuesta correcta 4
    $Question24 = $_POST['question_24']; #122
    $Answer24_1 = $_POST['answer_24_1']; #123
    $Answer24_2 = $_POST['answer_24_2']; #124
    $Answer24_3 = $_POST['answer_24_3']; #125
    $Answer24_4 = $_POST['answer_24_4']; #126
    $Radio_24 = $_POST['radio_24'];
    $Answer_correct24 = $_POST[$Radio_24];
    #Pregunta, respuestas  y respuesta correcta 5
    $Question25 = $_POST['question_25']; #127
    $Answer25_1 = $_POST['answer_25_1']; #128
    $Answer25_2 = $_POST['answer_25_2']; #129
    $Answer25_3 = $_POST['answer_25_3']; #130
    $Answer25_4 = $_POST['answer_25_4']; #131
    $Radio_25 = $_POST['radio_25'];
    $Answer_correct25 = $_POST[$Radio_25];

    #añadir las preguntas y respuestas a la base de datos
    #inserción en tabla partidas_creadas
    $insertTPC = "INSERT INTO partidas_creadas(
        Id,     nombre,           puntos_l1,  puntos_l2,   puntos_l3,  puntos_l4,  puntos_l5) VALUES (
        'null', '$nameGame' ,'$pointsL1' ,'$pointsL2' ,'$pointsL3', '$pointsL4', '$pointsL5');";
    $rTPC = mysqli_query($con_db, $insertTPC);

    $querryTPC = "SELECT COUNT(nombre) FROM partidas_creadas;";
    $rqTPC = mysqli_query($con_db, $querryTPC);
    $rowValue = $rqTPC->fetch_array();
    $viewValue = $rowValue['COUNT(nombre)'];
    #inserción en tabla preguntas_y_respuestas (nivel 1)
    $inserTPR1 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '1',     '1',                              '$Question1', '$Answer1_1', '$Answer1_2', '$Answer1_3', '$Answer1_4', '$Answer_correct1');";

    $inserTPR2 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '1',     '2',                              '$Question2', '$Answer2_1', '$Answer2_2', '$Answer2_3', '$Answer2_4', '$Answer_correct2');";
    
    $inserTPR3 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '1',     '3',                              '$Question3', '$Answer3_1', '$Answer3_2', '$Answer3_3', '$Answer3_4', '$Answer_correct3');";
    
    $inserTPR4 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '1',     '4',                              '$Question4', '$Answer4_1', '$Answer4_2', '$Answer4_3', '$Answer4_4', '$Answer_correct4');";
    
    $inserTPR5 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '1',     '5',                              '$Question5', '$Answer5_1', '$Answer5_2', '$Answer5_3', '$Answer5_4', '$Answer_correct5');";
    
    #inserción en tabla preguntas_y_respuestas (nivel 2)
    $inserTPR6 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '2',     '1',                              '$Question6', '$Answer6_1', '$Answer6_2', '$Answer6_3', '$Answer6_4', '$Answer_correct6');";

    $inserTPR7 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '2',     '2',                              '$Question7', '$Answer7_1', '$Answer7_2', '$Answer7_3', '$Answer7_4', '$Answer_correct7');";
    
    $inserTPR8 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '2',     '3',                              '$Question8', '$Answer8_1', '$Answer8_2', '$Answer8_3', '$Answer8_4', '$Answer_correct8');";
    
    $inserTPR9 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '2',     '4',                              '$Question9', '$Answer9_1', '$Answer9_2', '$Answer9_3', '$Answer9_4', '$Answer_correct9');";
    
    $inserTPR10 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '2',     '5',                              '$Question10', '$Answer10_1', '$Answer10_2', '$Answer10_3', '$Answer10_4', '$Answer_correct10');";

    #inserción en tabla preguntas_y_respuestas (nivel 3)
    $inserTPR11 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '3',     '1',                              '$Question11', '$Answer11_1', '$Answer11_2', '$Answer11_3', '$Answer11_4', '$Answer_correct11');";

    $inserTPR12 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '3',     '2',                              '$Question12', '$Answer12_1', '$Answer12_2', '$Answer12_3', '$Answer12_4', '$Answer_correct12');";
    
    $inserTPR13 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '3',     '3',                              '$Question13', '$Answer13_1', '$Answer13_2', '$Answer13_3', '$Answer13_4', '$Answer_correct13');";
    
    $inserTPR14 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '3',     '4',                              '$Question14', '$Answer14_1', '$Answer14_2', '$Answer14_3', '$Answer14_4', '$Answer_correct14');";
    
    $inserTPR15 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '3',     '5',                              '$Question15', '$Answer15_1', '$Answer15_2', '$Answer15_3', '$Answer15_4', '$Answer_correct15');";
    
    #inserción en tabla preguntas_y_respuestas (nivel 4)
    $inserTPR16 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '4',     '1',                              '$Question6', '$Answer16_1', '$Answer16_2', '$Answer16_3', '$Answer16_4', '$Answer_correct16');";

    $inserTPR17 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '4',     '2',                              '$Question7', '$Answer17_1', '$Answer17_2', '$Answer17_3', '$Answer17_4', '$Answer_correct17');";
    
    $inserTPR18 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '4',     '3',                              '$Question8', '$Answer18_1', '$Answer18_2', '$Answer18_3', '$Answer18_4', '$Answer_correct18');";
    
    $inserTPR19 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '4',     '4',                              '$Question9', '$Answer19_1', '$Answer19_2', '$Answer19_3', '$Answer19_4', '$Answer_correct19');";
    
    $inserTPR20 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '4',     '5',                              '$Question10', '$Answer20_1', '$Answer20_2', '$Answer20_3', '$Answer20_4', '$Answer_correct20');";
    
    #inserción en tabla preguntas_y_respuestas (nivel 5)
    $inserTPR21 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '5',     '1',                              '$Question21', '$Answer21_1', '$Answer21_2', '$Answer21_3', '$Answer21_4', '$Answer_correct21');";

    $inserTPR22 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '5',     '2',                              '$Question22', '$Answer22_1', '$Answer22_2', '$Answer22_3', '$Answer22_4', '$Answer_correct22');";
    
    $inserTPR23 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '5',     '3',                              '$Question23', '$Answer23_1', '$Answer23_2', '$Answer23_3', '$Answer23_4', '$Answer_correct23');";
    
    $inserTPR24 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '5',     '4',                              '$Question24', '$Answer24_1', '$Answer24_2', '$Answer24_3', '$Answer24_4', '$Answer_correct24');";
    
    $inserTPR25 = "INSERT INTO preguntas_y_respuestas(
        Id,     id_partida,    nivel, preguntas_por_nivel, pregunta,       respuesta_1,   respuesta_2,  respuesta_3,   respuesta_4,  respuesta_correcta) VALUES (
        'null', '$viewValue', '5',     '5',                              '$Question25', '$Answer25_1', '$Answer25_2', '$Answer25_3', '$Answer25_4', '$Answer_correct25');";

    #ejecucuión de las inserciones en la tabla preguntas_y_respuestas
    $rTPR1 = mysqli_query($con_db, $inserTPR1);
    $rTPR2 = mysqli_query($con_db, $inserTPR2);
    $rTPR3 = mysqli_query($con_db, $inserTPR3);
    $rTPR4 = mysqli_query($con_db, $inserTPR4);
    $rTPR5 = mysqli_query($con_db, $inserTPR5);

    $rTPR6 = mysqli_query($con_db, $inserTPR6);
    $rTPR7 = mysqli_query($con_db, $inserTPR7);
    $rTPR8 = mysqli_query($con_db, $inserTPR8);
    $rTPR9 = mysqli_query($con_db, $inserTPR9);
    $rTPR10 = mysqli_query($con_db, $inserTPR10);

    $rTPR11 = mysqli_query($con_db, $inserTPR11);
    $rTPR12 = mysqli_query($con_db, $inserTPR12);
    $rTPR13 = mysqli_query($con_db, $inserTPR13);
    $rTPR14 = mysqli_query($con_db, $inserTPR14);
    $rTPR15 = mysqli_query($con_db, $inserTPR15);

    $rTPR16 = mysqli_query($con_db, $inserTPR16);
    $rTPR17 = mysqli_query($con_db, $inserTPR17);
    $rTPR18 = mysqli_query($con_db, $inserTPR18);
    $rTPR19 = mysqli_query($con_db, $inserTPR19);
    $rTPR20 = mysqli_query($con_db, $inserTPR20);

    $rTPR21 = mysqli_query($con_db, $inserTPR21);
    $rTPR22 = mysqli_query($con_db, $inserTPR22);
    $rTPR23 = mysqli_query($con_db, $inserTPR23);
    $rTPR24 = mysqli_query($con_db, $inserTPR24);
    $rTPR25 = mysqli_query($con_db, $inserTPR25);

    if ($rTPR25) {
        header("Location:../../games created/");
    }
}

?>
