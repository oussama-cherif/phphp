<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
    <title>Details</title>
</head>
<nav>
    <ul>
        <li> <a href="index.php">Accueil</a> </li>
        <li> <a href="animals.php">Animaux</a> </li>
    </ul>

</nav>

<body>
    <div class="animal">
        <div class="animal-left">
            <img class="detail-img" src="dog.jpg" alt="animal">
            <h2>Name<h2>
                    <h3>Age<h3>
        </div>
        <div class="animal-right">
            <form action="api/reservation/create.php" class="form-adoption">
                <h2>Formulaire d'adoption:</h2>
                <input type="text" name="nom" placeholder="Nom complet  ex'John Doe'" required>
                <input type="text" name="adresse" placeholder="Adresse d'habitation" required>
                <input type="text" name="telephone" placeholder="Numéro de Telephone" required>
                <input type="text" name="cin" placeholder="CIN" required>
                <button type="submit">Valider</button>
            </form>
        </div>
    </div>
</body>

</html>