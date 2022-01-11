<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"  type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main-styles_gc.css" type="text/css">
    <title>Partidas creadas</title>
</head>
<body>
    <header>
        <div class="bar_information">
            <div class="return_home"><span><i class="fas fa-home"></i></span></div>
            <div class="games_created_title"><h1>Partidas creadas</h1></div>
        </div>
    </header>
    <main>
        <div class="games_created">
            <div class="block_games_created">
                <form action="../php/play_game.php" method="post">
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre partidad</th>
                                <th scope="col" class="play_game">Jugar</th>
                            </tr>
                        </thead>
                        <tbody class="table-sm">
                            <?php include("php/insert-gamesCreated.php")?>
                        </tbody>
                    </table>
                    <input type="hidden" name="val_game" id="val-game">
                    <input type="submit" value="" class="disabled_block" id="btn-play" name="playGame">
                </form>
            </div>
        </div>
    </main>
    <footer>
        <script src="js/main-gameCreated.js" type="text/javascript"></script>
    </footer>
</body>
</html>