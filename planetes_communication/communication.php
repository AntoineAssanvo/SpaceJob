<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="p_com.css">
    <link rel="icon" type="image/png" href="images/logo_web.png" />
    <title>Planète Communication</title>
</head>


<body>
    <?php
    // je m'informe si il y'a une erreur
    ini_set('display_errors', 'on');
    //je me connecet depuis la base//
    $bdd = new PDO('mysql:host=localhost;dbname=spacejob', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    $sql = "SELECT summarize FROM spacejob_planete WHERE plan_name='chef de projet web'";

    $req = $bdd->prepare($sql);

    $req->execute();

    echo ('<p>');

    while ($data = $req->fetch()) {
        echo ' <p class= "main_text" >' . $data['summarize'] . '</p>';
    }

    $req = null;
    echo '</p>';

    ?>



</body>

</html>