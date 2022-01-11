<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"  type="text/css">
    <link rel="stylesheet" href="styles/main-styles_sg.css" type="text/css">
    <title>Partida en juego</title>
</head>
<body>
    <header>
        <div class="bar_information">
            <div class="return_home"><span><i class="fas fa-home"></i></span></div>
            <div class="level"><h1 id="set_level">Nivel </h1></div>
            <div class="score"><h1 id="set_score">Puntaje: 0</h1></div>
        </div>
    </header>
    <main>
        <div class="container-QA">
            <div class="container_question">
                <div class="question-c">
                    <p class="set_question"></p>
                </div>
            </div>
            <div class="container_answer">
                <div class="answer-c"><p class="answer"></p></div>
                <div class="answer-c"><p class="answer"></p></div>
                <div class="answer-c"><p class="answer"></p></div>
                <div class="answer-c"><p class="answer"></p></div>
            </div>
            <div class="container-button">
                <div class="btn-c"><input type="button" value="Aceptar" id="to-accept"></div>
            </div>
        </div>
        <div class="modal-c modal_continue disabled_block">
            <div class="modal">
                <h3>¿Que desea realizar?</h3>
                <div class="container-button">
                    <div class="btn-c"><input type="button" value="Abandonar la partida" id="to-Leave"></div>
                    <div class="btn-c"><input type="button" value="Continuar la partida" id="to-next"></div>
                </div>
            </div>
        </div>
        <div class="modal-c modal_gameOver disabled_block">
            <div class="modal">
                <form method="post" action="php/add_player_gameOver.php">
                    <h3>Fin del juego</h3>
                    <div class="score_gameOver"><p id="score-gameOver">Puntaje: 0</p></div>
                    <input type="text" name="name_player" id="name-player" placeholder="Nombre jugador">
                    <input type="hidden" name="scoreGameOver" class="scoreGameOver">
                    <input type="hidden" name="NameGame" class="NameGame">
                    <div class="container-button">
                        <div class="btn-c"><input type="submit" value="Aceptar" id="to-accept_GO" name="to-accept_GO"></div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <script src="js/main-start_game.js" type="text/javascript"></script>
        <?php include('php/generate_quiz.php'); ?>
    </footer>
</body>
</html>