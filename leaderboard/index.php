<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"  type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main-styles_tc.css" type="text/css">
    <title>Tabla de clasificación</title>
</head>
<body>
    <header>
        <div class="bar_information">
            <div class="return_home"><span><i class="fas fa-home"></i></span></div>
            <div class="leaderboard_title"><h1>Tabla de clasificación</h1></div>
        </div>
    </header>
    <main>
        <div class="leaderboard_game">
                <div class="block_leaderboard">
                    <table class="table table-bordered">
                        <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre jugador</th>
                            <th scope="col">Partida</th>
                            <th scope="col" class="score">Puntaje</th>
                        </tr>
                        </thead>
                        <tbody class="table-sm">
                        <?php include("php/insert-leaderboard.php"); ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </main>
    <footer>
        <script src="js/main_leaderboard.js" type="text/javascript"></script>
    </footer>
</body>
</html>