<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP partie 2</title>
</head>
<body>
    <?php
        $age = 9;
        $gender = "Femme";
        if($age >= 18 && $gender == "Homme"){
            echo("Vous êtes un $gender et vous êtes majeur");
        }
        elseif($age < 18 && $gender == "Homme"){
            echo("Vous êtes un $gender et vous êtes mineur");
        }
        elseif($age >= 18 && $gender == "Femme"){
            echo("Vous êtes une $gender et vous êtes majeure");
        }
        else{
            echo("Vous êtes une $gender et vous êtes mineure");
        }
    ?>
</body>
</html>