<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="styles/main-styles.css" type="text/css">
    <title>CHALLENGE - CONCURSO DE PREGUNTAS Y RESPUESTAS</title>
</head>
<body>
    <header>
        <div class="Qa-c_title">
            <h1>CONCURSO DE PREGUNTAS Y RESPUESTAS</h1>
        </div>
    </header>
    <main>
        <div class="container-button">
            <form action="php/play_game.php" method="post">
                <div class="btn-c">
                    <input type="hidden" name="val_game" value="1">
                    <input type="submit" value="Jugar" id="btn-play" name="playGame">
                </div>
            </form>
                <div class="btn-c"><input type="button" value="Crear partida" id="btn-created"></div>
                <div class="btn-c"><input type="button" value="Partidas creadas" id="btn-games-created"></div>
                <div class="btn-c"><input type="button" value="Tabla de calsificación" id="btn-leaderboard"></div>
        </div>
    </main>
    <footer>
        <div class="copyright">
            <p>© Copyright 2022 <a href="https://github.com/JairTorres1003" target="_blank">Jair Torres</a></p>
            <script src="js/main.js" type="text/javascript"></script>
        </div>
    </footer>
</body>
</html>