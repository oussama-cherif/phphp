<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Animaux</title>
</head>

<body>
  <nav>
    <ul>
      <li> <a href="index.php">Accueil</a> </li>
      <li>Animaux</li>
    </ul>
  </nav>
  <h2>Jetez un oeil à notre magnifique collection d'animaux !</h2>
  <section class="home-animals">

    <?php
    $animals = ['rex', 'oliver', 'fahd', 'snoop'];
    if (!empty($animals)) {
      foreach ($animals as $animal) {
        echo "
        <div class='carte-animal'><a href='details.php'>  
        <h3> $animal</h3>
        <img class='img-home' src='dog.jpg' alt='dog'>
        <h4> age : 3 ans <h4>
        </a></div>    
        ";
      }
    } else {
      echo "<h3> on n'a pas d'animaux pour vous :( désolé </h3>";
    }

    ?>
  </section>
</body>

</html>