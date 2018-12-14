<?php
$age = 18;
$gender = 'Femme'
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>php part2 ex3</title>
      <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <p>
    <?php
if ($age < 18 && $gender == 'Femme'){
  echo 'Vous êtes une ' . $gender .  ' et vous êtes mineure';
}elseif ($age >= 18 && $gender == 'Femme') {
    echo 'Vous êtes une ' . $gender . ' et vous êtes majeure';
}elseif ($age < 18 && $gender == 'Homme') {
  echo 'Vous êtes un ' . $gender .  ' et vous êtes mineur';
}elseif ($age >= 18 && $gender == 'Homme') {
  echo 'Vous êtes un ' . $gender . ' et vous êtes majeur';
};
    ?>
    </p>
  </body>
</html>
