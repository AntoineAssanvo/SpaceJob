<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="images/logo_web.png" />
  <title>FORMULAIRE</title>
</head>

<body>
  <div class="wrapper">
    <div class="contact-form">
      <form method="POST">
        <input type="text" name='contact_name' placeholder="Comment t'appelles-tu ?" class="input" />
        <input type="text" name='age' placeholder="quel est ton age ???" class="input" />
        <input type="email" name='mail' placeholder="Donne nous ton email" class="input">

        <select name="profession" class="input">
          <option value="secondaire" class="option">Etudiant(e) dans le secondaire</option>
          <option value="superieur" class="option">Etudiant(e) dans le superieur</option>
          <option value="salarié" class="option">Salarié"</option>
          <option value="non-salarié" class="option">Non-salarié"</option>
        </select>

        <input type="text" name='subject' placeholder=" le sujet de ton message est ?" class="input" />


        <textarea name="message" cols="50" rows="5" placeholder="Ecrire nous dans cette zone !" class="msg"></textarea>
        <!-- je met le bouton envoie-->
        <input type="submit" value="Envoyer">

      </form>
    </div>
  </div>
</body>

</html>

<?php
// je m'informe si il y'a une erreur
ini_set('display_errors', 'on');
//je me connecet depuis la base//
include('./lie/connect.php');


// je met une condition//
if (isset($_POST['contact_name']) and isset($_POST['age']) and  isset($_POST['mail']) and  isset($_POST['profession']) and  isset($_POST['subject']) and  isset($_POST['message'])) {

  // je prepare la requete à envoyer //
  $requete = $bdd->prepare("INSERT INTO  spacejob_form (contact_name, age, mail, profession, subject, message) VALUES (?, ?, ?, ?, ?, ?)");
  //j'execute la requete//
  $requete->execute(array($_POST['contact_name'], $_POST['age'], $_POST['mail'], $_POST['profession'], $_POST['subject'], $_POST['message']));
}
?>
