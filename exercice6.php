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
        $age = 1;
        // echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
        if($age >= 18){
            echo("Tu es majeur");
        }else{
            echo("Tu n'es pas majeur");
        }
    ?>
</body>
</html>