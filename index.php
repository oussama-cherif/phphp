<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Accueil</title>
</head>

<body>
  <nav>
    <ul>
      <li>Accueil</li>
      <li> <a href="animals.php">Animaux</a> </li>
    </ul>
    <form action="https://www.paypal.com/donate" method="post" target="_blank">
      <input type="hidden" name="hosted_button_id" value="CSVQM9UD3PV78" />
      <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donate_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Bouton Faites un don avec PayPal" />
      <img alt="" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1" />
    </form>
  </nav>
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