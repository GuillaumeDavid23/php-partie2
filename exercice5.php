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
        $gender = "Homme";
        // echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
        if($gender == "Homme"){
            echo("C'est un développeur");
        }else{
            echo("C'est une développeuse");
        }
    ?>
</body>
</html>