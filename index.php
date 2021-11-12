<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body> -->
<?php
// $prenom = "Teddy";
// $nom = "williot";
// $note1 = "10";
// $note2 = "20";
// $moyenne = (($note1 + $note2)/2);

// echo ("<h1>bonjour $prenom $nom vous avez eu $moyenne de moyenne !</h1>");
// echo("<hr>");
?>

<h1>les tableau permettre de sauvegarder une liste de valeur</h1>

<?php
// $eleve = [
//     "nom" => "doe",
//     "prenom" => "teddy",
//     "notes" => [10, 20, 30],
// ];
// echo $eleve["nom"], $eleve["prenom"]; 
// echo("<hr>");
?>

<!-- <h1>Les conditions</h1> -->

<?php
// $note = readline("entrez votre note"); 
// if ($note >= 12) {
//     if ($note == 10) {
//         echo "vous avez pile la moyenne";
//     } else 
//     echo "bravo vous avez la moyenne";
// } else {
//     echo "dommage vous n'avez pas la moyenne";
// }
// echo "<br>"

?>
<!-- </body>

</html> -->


<html>

<head>
    <link rel="stylesheet" href="style/styles.css" type="text/css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Dice Roller</title>
</head>

<body>
    <main class="container p-3">
        <h1>Les Dices</h1>
        <br>
        <form class="form-group" method="post">
            <!-- <br> -->
            <div class="input-container">
                <div class="input">
                    <label for="dice-num" class="form-label">Nombre de dés</label>
                    <br>
                    <input class="form-control" type="number" name="number" max="10000" min="1" required value="1">
                </div>
                <div class="input">
                    <label for="dice-slides">Nombre de face</label>
                    <br>
                    <select class="form-select" aria-label="Disabled select example" name="dice-slides" id="diceSlides"
                        required>
                        <option selected>Ouvrir la selection du menu</option>
                        <option value="6">6</option>
                        <option value="8">8</option>
                        <option value="10">10</option>
                        <option value="12">12</option>
                        <option value="16">16</option>
                        <option value="20">20</option>
                    </select> <br>
                </div>
                <div class="submitBtn">
                    <button class="btn btn-success" type="submit" name="submit">Lancez les dés</button>
                </div>

        </form>
        <div class="result-container">
            <?php
            // je declare mes variables
            
    if (isset($_POST["submit"])) {
        $number = $_POST["number"];
        $diceSlides = $_POST["dice-slides"];
        $diceArray = array();
        
        
        echo "<br>";
        echo "$number dés ont été lancer <br>";
        echo "<br>";
        
        //je fait mes boucle
        for ($i = 0; $i < $number; $i++) {
            array_push($diceArray,rand(1, $diceSlides));
        }
        ?>
            <!-- resultat total de dice lancées -->
            <h2> Somme totale </h2> <br>
            <p>
                <?php
                echo array_sum($diceArray);
                ?>
            </p> <br> <br>

            <h2>Tableau de dice </h2> <br>
            <br>
            <?php 
        for($i = 0 ; $i < $number ; $i++){
            ?>
            <!-- resultat de chaque des lancées -->
            <p class="resultat"><?php echo $diceArray[$i] ?> </p>

            <?php 
        }
        ?>

        </div>
    </main>
    <?php   
    };
    ?>




</body>

</html>