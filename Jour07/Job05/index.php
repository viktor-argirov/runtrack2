<?php
session_start();

// Initialiser le tableau de jeu et le joueur actif
if (!isset($_SESSION['game'])) {
    $_SESSION['game'] = array_fill(0, 9, '-');
    $_SESSION['player'] = 'X';
}

// Vérifier si un joueur a cliqué sur une case
if (isset($_POST['position'])) {
    // Récupérer la position de la case cliquée
    $position = $_POST['position'];

    // Vérifier si la case est vide
    if ($_SESSION['game'][$position] === '-') {
        // Mettre à jour la valeur de la case avec le joueur actif
        $_SESSION['game'][$position] = $_SESSION['player'];

        // Vérifier si le joueur actif a gagné
        if (checkWin($_SESSION['player'], $_SESSION['game'])) {
            $winner = $_SESSION['player'];
        } else {
            // Changer le joueur actif
            $_SESSION['player'] = ($_SESSION['player'] === 'X') ? 'O' : 'X';
        }
    }
}

// Fonction de vérification de victoire
function checkWin($player, $game)
{
    $winningPatterns = array(
        array(0, 1, 2),
        array(3, 4, 5),
        array(6, 7, 8),
        array(0, 3, 6),
        array(1, 4, 7),
        array(2, 5, 8),
        array(0, 4, 8),
        array(2, 4, 6)
    );

    foreach ($winningPatterns as $pattern) {
        if ($game[$pattern[0]] === $player && $game[$pattern[1]] === $player && $game[$pattern[2]] === $player) {
            return true;
        }
    }

    return false;
}

// Fonction de réinitialisation du jeu
if (isset($_POST['reset'])) {
    resetGame();
}
function resetGame()
{
    $_SESSION['game'] = array_fill(0, 9, '-');
    $_SESSION['player'] = 'X';
    unset($winner);
}

// Affichage du joueur gagnant
$winnerMessage = '';
if (isset($winner)) {
    $winnerMessage = "Le joueur $winner a gagné !";
}

// Affichage du tour du joueur
$playerTurnMessage = "Tour du joueur $_SESSION[player]";

?>

<!DOCTYPE html>
<html>

<head>
    <title>Jeu du Morpion</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }

        td {
            width: 50px;
            height: 50px;
            text-align: center;
            border: 1px solid black;
        }

        button {
            width: 100%;
            height: 100%;
            font-size: 24px;
            padding: 0;
            border: none;
            background-color: transparent;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h2>
        <?php echo $playerTurnMessage; ?>
    </h2>
    <h2>
        <?php echo $winnerMessage; ?>
    </h2>

    <form action="" method="post">
        <table>
            <tr>
                <td><button type="submit" name="position" value="0">
                        <?php echo $_SESSION['game'][0]; ?>
                    </button></td>
                <td><button type="submit" name="position" value="1">
                        <?php echo $_SESSION['game'][1]; ?>
                    </button></td>
                <td><button type="submit" name="position" value="2">
                        <?php echo $_SESSION['game'][2]; ?>
                    </button></td>
            </tr>
            <tr>
                <td><button type="submit" name="position" value="3">
                        <?php echo $_SESSION['game'][3]; ?>
                    </button></td>
                <td><button type="submit" name="position" value="4">
                        <?php echo $_SESSION['game'][4]; ?>
                    </button></td>
                <td><button type="submit" name="position" value="5">
                        <?php echo $_SESSION['game'][5]; ?>
                    </button></td>
            </tr>
            <tr>
                <td><button type="submit" name="position" value="6">
                        <?php echo $_SESSION['game'][6]; ?>
                    </button></td>
                <td><button type="submit" name="position" value="7">
                        <?php echo $_SESSION['game'][7]; ?>
                    </button></td>
                <td><button type="submit" name="position" value="8">
                        <?php echo $_SESSION['game'][8]; ?>
                    </button></td>
            </tr>
        </table>
        <input type="submit" name="reset" value="Réinitialiser">
    </form>
</body>

</html>