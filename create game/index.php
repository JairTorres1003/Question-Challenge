<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"  type="text/css">
    <link rel="stylesheet" href="styles/main-styles_cg.css" type="text/css">
    <title>Crea una nueva partida</title>
</head>
<body>
    <header>
        <div class="bar_information">
            <div class="return_home"><span><i class="fas fa-home"></i></span></div>
            <div class="creating_title"><h1>Crea una nueva partida</h1></div>
        </div>
    </header>
    <main>
        <div class="creating_game">
            <div class="block_creating c_level">
                <form method="post" action="php/created_game.php">
                    <div class="characteristics">
                        <div class="c-name_game">
                            <label for="name-game">Nombre partida:</label>
                            <input type="text" name="name_game" id="name-game" class="text_QA">
                        </div>
                        <div class="define_point_level">
                            <h3>Defina la cantidad de puntos ha obtener por nivel</h3>
                            <div class="c-level">
                                <label for="level-one">Nivel 1:</label>
                                <input type="number" name="level_one" id="level-one" placeholder="eje: 100" class="text_QA">
                            </div>
                            <div class="c-level">
                                <label for="level-two">Nivel 2:</label>
                                <input type="number" name="level_two" id="level-two" placeholder="eje: 200" class="text_QA">
                            </div>
                            <div class="c-level">
                                <label for="level-three">Nivel 3:</label>
                                <input type="number" name="level_three" id="level-three" placeholder="eje: 300" class="text_QA">
                            </div>
                            <div class="c-level">
                                <label for="level-four">Nivel 4:</label>
                                <input type="number" name="level_four" id="level-four" placeholder="eje: 400" class="text_QA">
                            </div>
                            <div class="c-level">
                                <label for="level-five">Nivel 5:</label>
                                <input type="number" name="level_five" id="level-five" placeholder="eje: 500" class="text_QA">
                            </div>
                        </div>
                    </div>
                    <div class="QA-c">
                        <h3>Nivel 1</h3>
                        <div class="block_levels">
                            <div class="icon"><span>1</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_1" id="question-1" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_1" id="radio1-1" value="answer_1_1">
                                    <textarea name="answer_1_1" id="answer1-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_1" id="radio1-2" value="answer_1_2">
                                    <textarea name="answer_1_2" id="answer1-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_1" id="radio1-3" value="answer_1_3">
                                    <textarea name="answer_1_3" id="answer1-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_1" id="radio1-4" value="answer_1_4">
                                    <textarea name="answer_1_4" id="answer1-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block_levels">
                            <div class="icon"><span>2</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_2" id="question-2" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_2" id="radio2-1" value="answer_2_1">
                                    <textarea name="answer_2_1" id="answer2-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_2" id="radio2-2" value="answer_2_2">
                                    <textarea name="answer_2_2" id="answer2-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_2" id="radio2-3" value="answer_2_3">
                                    <textarea name="answer_2_3" id="answer2-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_2" id="radio2-4" value="answer_2_4">
                                    <textarea name="answer_2_4" id="answer2-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block_levels">
                            <div class="icon"><span>3</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_3" id="question-3" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_3" id="radio3-1" value="answer_3_1">
                                    <textarea name="answer_3_1" id="answer3-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_3" id="radio3-2" value="answer_3_2">
                                    <textarea name="answer_3_2" id="answer3-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_3" id="radio3-3" value="answer_3_3">
                                    <textarea name="answer_3_3" id="answer3-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_3" id="radio3-4" value="answer_3_4">
                                    <textarea name="answer_3_4" id="answer3-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block_levels">
                            <div class="icon"><span>4</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_4" id="question-4" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_4" id="radio4-1" value="answer_4_1">
                                    <textarea name="answer_4_1" id="answer4-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_4" id="radio4-2" value="answer_4_2">
                                    <textarea name="answer_4_2" id="answer4-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_4" id="radio4-3" value="answer_4_3">
                                    <textarea name="answer_4_3" id="answer4-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_4" id="radio4-4" value="answer_4_4">
                                    <textarea name="answer_4_4" id="answer4-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block_levels">
                            <div class="icon"><span>5</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_5" id="question-5" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_5" id="radio5-1" value="answer_5_1">
                                    <textarea name="answer_5_1" id="answer5-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_5" id="radio5-2" value="answer_5_2">
                                    <textarea name="answer_5_2" id="answer5-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_5" id="radio5-3" value="answer_5_3">
                                    <textarea name="answer_5_3" id="answer5-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_5" id="radio5-4" value="answer_5_4">
                                    <textarea name="answer_5_4" id="answer5-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="QA-c">
                        <h3>Nivel 2</h3>
                        <div class="block_levels">
                            <div class="icon"><span>1</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_6" id="question-6" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_6" id="radio6-1" value="answer_6_1">
                                    <textarea name="answer_6_1" id="answer6-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_6" id="radio6-2" value="answer_6_2">
                                    <textarea name="answer_6_2" id="answer6-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_6" id="radio6-3" value="answer_6_3">
                                    <textarea name="answer_6_3" id="answer6-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_6" id="radio6-4" value="answer_6_4">
                                    <textarea name="answer_6_4" id="answer6-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block_levels">
                            <div class="icon"><span>2</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_7" id="question-7" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_7" id="radio7-1" value="answer_7_1">
                                    <textarea name="answer_7_1" id="answer7-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_7" id="radio7-2" value="answer_7_2">
                                    <textarea name="answer_7_2" id="answer7-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_7" id="radio7-3" value="answer_7_3">
                                    <textarea name="answer_7_3" id="answer7-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_7" id="radio7-4" value="answer_7_4">
                                    <textarea name="answer_7_4" id="answer7-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block_levels">
                            <div class="icon"><span>3</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_8" id="question-8" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_8" id="radio8-1" value="answer_8_1">
                                    <textarea name="answer_8_1" id="answer8-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_8" id="radio8-2" value="answer_8_2">
                                    <textarea name="answer_8_2" id="answer8-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_8" id="radio8-3" value="answer_8_3">
                                    <textarea name="answer_8_3" id="answer8-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_8" id="radio8-4" value="answer_8_4">
                                    <textarea name="answer_8_4" id="answer8-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block_levels">
                            <div class="icon"><span>4</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_9" id="question-9" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_9" id="radio9-1" value="answer_9_1">
                                    <textarea name="answer_9_1" id="answer9-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_9" id="radio9-2" value="answer_9_2">
                                    <textarea name="answer_9_2" id="answer9-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_9" id="radio9-3" value="answer_9_3">
                                    <textarea name="answer_9_3" id="answer9-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_9" id="radio9-4" value="answer_9_4">
                                    <textarea name="answer_9_4" id="answer9-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block_levels">
                            <div class="icon"><span>5</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_10" id="question-10" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_10" id="radio10-1" value="answer_10_1">
                                    <textarea name="answer_10_1" id="answer10-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_10" id="radio10-2" value="answer_10_2">
                                    <textarea name="answer_10_2" id="answer10-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_10" id="radio10-3" value="answer_10_3">
                                    <textarea name="answer_10_3" id="answer10-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_10" id="radio10-4" value="answer_10_4">
                                    <textarea name="answer_10_4" id="answer10-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="QA-c">
                        <h3>Nivel 3</h3>
                        <div class="block_levels">
                            <div class="icon"><span>1</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_11" id="question-11" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_11" id="radio11-1" value="answer_11_1">
                                    <textarea name="answer_11_1" id="answer11-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_11" id="radio11-2" value="answer_11_2">
                                    <textarea name="answer_11_2" id="answer11-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_11" id="radio11-3" value="answer_11_3">
                                    <textarea name="answer_11_3" id="answer11-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_11" id="radio11-4" value="answer_11_4">
                                    <textarea name="answer_11_4" id="answer11-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block_levels">
                            <div class="icon"><span>2</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_12" id="question-12" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_12" id="radio12-1" value="answer_12_1">
                                    <textarea name="answer_12_1" id="answer12-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_12" id="radio12-2" value="answer_12_2">
                                    <textarea name="answer_12_2" id="answer12-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_12" id="radio12-3" value="answer_12_3">
                                    <textarea name="answer_12_3" id="answer12-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_12" id="radio12-4" value="answer_12_4">
                                    <textarea name="answer_12_4" id="answer12-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block_levels">
                            <div class="icon"><span>3</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_13" id="question-13" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_13" id="radio13-1" value="answer_13_1">
                                    <textarea name="answer_13_1" id="answer13-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_13" id="radio13-2" value="answer_13_2">
                                    <textarea name="answer_13_2" id="answer13-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_13" id="radio13-3" value="answer_13_3">
                                    <textarea name="answer_13_3" id="answer13-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_13" id="radio13-4" value="answer_13_4">
                                    <textarea name="answer_13_4" id="answer13-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block_levels">
                            <div class="icon"><span>4</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_14" id="question-14" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_14" id="radio14-1" value="answer_14_1">
                                    <textarea name="answer_14_1" id="answer14-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_14" id="radio14-2" value="answer_14_2">
                                    <textarea name="answer_14_2" id="answer14-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_14" id="radio14-3" value="answer_14_3">
                                    <textarea name="answer_14_3" id="answer14-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_14" id="radio14-4" value="answer_14_4">
                                    <textarea name="answer_14_4" id="answer14-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block_levels">
                            <div class="icon"><span>5</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_15" id="question-15" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_15" id="radio15-1" value="answer_15_1">
                                    <textarea name="answer_15_1" id="answer15-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_15" id="radio15-2" value="answer_15_2">
                                    <textarea name="answer_15_2" id="answer15-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_15" id="radio15-3" value="answer_15_3">
                                    <textarea name="answer_15_3" id="answer15-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_15" id="radio15-4" value="answer_15_4">
                                    <textarea name="answer_15_4" id="answer15-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="QA-c">
                        <h3>Nivel 4</h3>
                        <div class="block_levels">
                            <div class="icon"><span>1</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_16" id="question-16" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_16" id="radio16-1" value="answer_16_1">
                                    <textarea name="answer_16_1" id="answer16-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_16" id="radio16-2" value="answer_16_2">
                                    <textarea name="answer_16_2" id="answer16-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_16" id="radio16-3" value="answer_16_3">
                                    <textarea name="answer_16_3" id="answer16-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_16" id="radio16-4" value="answer_16_4">
                                    <textarea name="answer_16_4" id="answer16-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block_levels">
                            <div class="icon"><span>2</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_17" id="question-17" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_17" id="radio17-1" value="answer_17_1">
                                    <textarea name="answer_17_1" id="answer17-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_17" id="radio17-2" value="answer_17_2">
                                    <textarea name="answer_17_2" id="answer17-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_17" id="radio17-3" value="answer_17_3">
                                    <textarea name="answer_17_3" id="answer17-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_17" id="radio17-4" value="answer_17_4">
                                    <textarea name="answer_17_4" id="answer17-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block_levels">
                            <div class="icon"><span>3</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_18" id="question-18" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_18" id="radio18-1" value="answer_18_1">
                                    <textarea name="answer_18_1" id="answer18-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_18" id="radio18-2" value="answer_18_2">
                                    <textarea name="answer_18_2" id="answer18-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_18" id="radio18-3" value="answer_18_3">
                                    <textarea name="answer_18_3" id="answer18-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_18" id="radio18-4" value="answer_18_4">
                                    <textarea name="answer_18_4" id="answer18-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block_levels">
                            <div class="icon"><span>4</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_19" id="question-19" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_19" id="radio19-1" value="answer_19_1">
                                    <textarea name="answer_19_1" id="answer19-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_19" id="radio19-2" value="answer_19_2">
                                    <textarea name="answer_19_2" id="answer19-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_19" id="radio19-3" value="answer_19_3">
                                    <textarea name="answer_19_3" id="answer19-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_19" id="radio19-4" value="answer_19_4">
                                    <textarea name="answer_19_4" id="answer19-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block_levels">
                            <div class="icon"><span>5</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_20" id="question-20" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_20" id="radio20-1" value="answer_20_1">
                                    <textarea name="answer_20_1" id="answer20-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_20" id="radio20-2" value="answer_20_2">
                                    <textarea name="answer_20_2" id="answer20-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_20" id="radio20-3" value="answer_20_3">
                                    <textarea name="answer_20_3" id="answer20-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_20" id="radio20-4" value="answer_20_4">
                                    <textarea name="answer_20_4" id="answer20-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="QA-c">
                        <h3>Nivel 5</h3>
                        <div class="block_levels">
                            <div class="icon"><span>1</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_21" id="question-21" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_21" id="radio21-1" value="answer_21_1">
                                    <textarea name="answer_21_1" id="answer21-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_21" id="radio21-2" value="answer_21_2">
                                    <textarea name="answer_21_2" id="answer21-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_21" id="radio21-3" value="answer_21_3">
                                    <textarea name="answer_21_3" id="answer21-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_21" id="radio21-4" value="answer_21_4">
                                    <textarea name="answer_21_4" id="answer21-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block_levels">
                            <div class="icon"><span>22</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_22" id="question-22" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_22" id="radio22-1" value="answer_22_1">
                                    <textarea name="answer_22_1" id="answer22-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_22" id="radio22-2" value="answer_22_2">
                                    <textarea name="answer_22_2" id="answer22-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_22" id="radio2-3" value="answer_22_3">
                                    <textarea name="answer_22_3" id="answer22-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_22" id="radio22-4" value="answer_22_4">
                                    <textarea name="answer_22_4" id="answer22-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block_levels">
                            <div class="icon"><span>3</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_23" id="question-23" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_23" id="radio23-1" value="answer_23_1">
                                    <textarea name="answer_23_1" id="answer23-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_23" id="radio23-2" value="answer_23_2">
                                    <textarea name="answer_23_2" id="answer23-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_23" id="radio23-3" value="answer_23_3">
                                    <textarea name="answer_23_3" id="answer23-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_23" id="radio23-4" value="answer_23_4">
                                    <textarea name="answer_23_4" id="answer23-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block_levels">
                            <div class="icon"><span>4</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_24" id="question-24" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_24" id="radio24-1" value="answer_24_1">
                                    <textarea name="answer_24_1" id="answer24-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_24" id="radio24-2" value="answer_24_2">
                                    <textarea name="answer_24_2" id="answer24-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_24" id="radio24-3" value="answer_24_3">
                                    <textarea name="answer_24_3" id="answer24-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_24" id="radio24-4" value="answer_24_4">
                                    <textarea name="answer_24_4" id="answer24-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block_levels">
                            <div class="icon"><span>5</span></div>
                            <div class="inputs">
                                <div class="questions-c">
                                    <textarea name="question_25" id="question-25" placeholder="Pregunta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_25" id="radio25-1" value="answer_25_1">
                                    <textarea name="answer_25_1" id="answer25-1" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_25" id="radio25-2" value="answer_25_2">
                                    <textarea name="answer_25_2" id="answer25-2" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_25" id="radio25-3" value="answer_25_3">
                                    <textarea name="answer_25_3" id="answer25-3" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                                <div class="answer-c">
                                    <input type="radio" name="radio_25" id="radio25-4" value="answer_25_4">
                                    <textarea name="answer_25_4" id="answer25-4" placeholder="Respuesta" class="text_QA"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-button">
                        <div class="btn-c"><input type="submit" value="Aceptar" name="to_accept" id="to-accept"></div>
                    </div>
                </form>
            </div>
            
        </div>
    </main>
    <footer><script src="js/main_created.js" type="text/javascript"></script></footer>
</body>
</html>