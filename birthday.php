<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ma nouvelle page</title>
    <link rel="stylesheet" href="birthday.css">
</head>
<body>
    <div id="title">
        <header>Anniversaire de Clara</header></br>
        <h1>sur le thème</h1>
        <h2>!! STAR 80 !!</h2>
        <button onclick="displayExplanations()">en savoir plus</button>
        <p id="ExplainParty">Le thème de la fête : une excuse pour se déguiser!</br>
            Les comédies musicales ! </br>
            Saturday Night fever ! </br>
            ABBA ! </br>
            Début et soirée ! </br>
            On est là pour s'amuser !</br>
            Je vous attends avec toutes les couleurs de l'arc-en-ciel ! </br>
        </p>
    </div>

    <div id="adress">
        <h3>RDV le samedi 12 mai 2024 à 20h</h3>
        <button onclick="adressToParty()">clique ici pour connaître l'adresse</button>
    </div>

    <form method="post" action="register.php">
        <h4>Formulaire</h12></br>
        <input type="text" id="name" name="nom" placeholder="Nom"/></br>
        <input type="number" id="number" name="nombre" min="1" max="10"/></br>
        <input type="submit" name="submit" value="Envoyer"></br>
    </form>
</br>
    <?php include "count_guests.php" ?>
</br>
    <script src="birthday.js"></script>
</body>
</html>