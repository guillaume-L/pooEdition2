<?php
//inclusion des class
require 'Personnage.php';
require 'Magicien.php';
require 'Guerrier.php';
require 'Presentation.php';
//instanciation de mes class
$leodagan = new Guerrier("Leodagan");
$merlin = new Magicien('Merlin');
//affiche les carracteristiques du guerrier Leodagan
var_dump($leodagan);
//affiche les carracteristiques du magicien Merlin
var_dump($merlin);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jouer avec la poo en php</title>
  </head>
  <body>
    <h1>Présentation des personnages</h1>
    <p><?= $merlin->name; ?></p>
    <p><?php Presentation::getMagicien();?></p>
    <p><?= $leodagan->name ?></p>
    <p><?php Presentation::getGuerrier(); ?></p>
    <h2>Intérraction des personnages</h2>
    <p><?= "Merlin cri.. ";?></p>
      <p><?= $merlin->yell();?></p>
        <p><?= "Merlin lance une boule de feu sur Leodagan "; ?></p>
          <p><?php $merlin->spell($leodagan); ?></p>
            <p><?= "vie de leodagan"." ".$leodagan->life; ?></p>
            <p><?="Leodagan prend une potion de vie qui trainée dans sa poche" ?></p>
            <p><?= $leodagan->regenerated(); ?></p>
            <p><?= "Leodagan récupère"." ".$leodagan->life." "."points de vie au total"; ?></p>
              <p><?= "Leodagan cri.. "; ?></p>
                <p><?php $leodagan->yell(); ?></p>
                <p><?= "Leodagan frappe Merlin avec son éppée "; ?></p>
                <p><?php $leodagan->handOfGod($merlin); ?></p>
                <p><?= "vie de merlin"." ".$merlin->life; ?></p>
                <p><?= $leodagan->name." "." range son éppée... Attrape"." ".$merlin->name." "."et lui colle une patate" ?></p>
                <p><?php $leodagan->punch($merlin) ?></p>
                <h3>Fin du combat (dans quel état sont nos personnages)</h3>
                <p><?= $merlin->death(); ?></p>
                <p><?= $leodagan->death(); ?></p>
  </body>
</html>
