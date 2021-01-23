<?php

// Programmé en orienté objet

class Foo {

    // props

    public string $echec;
    public string $victoire;
    public string $oui;
    public string $non;
    public string $phrase;
    public string $gif;

    // constructeur

    public function __construct() {

        $this->echec = "Mais si tu recharges vite la page, personne ne le saura jamais.";
        $this->victoire = "On peut vraiment pas rester sur ça. ";
        $this->oui = "Oui... On peut rester sur ça...";
        $this->non = "Non !";

    }

    // méthodes

    public function ouiOuNonWinkWink() {

        $variable = rand ( 1 , 3 );

        if ( $variable === 3 ) {

            $this->phrase = $this->echec;
            $this->gif = "https://media.giphy.com/media/ZhGyBRO1r01SiWJNA8/giphy.gif";

            return $this->oui;

        } else {

            $this->phrase = $this->victoire;
            $this->gif = "https://media.giphy.com/media/VMO6qeIbr7JRLnLTGw/giphy.gif";

            return $this->non;
        }
    }

    public function getCurrentDate(): string {
        return date('d m Y');
    }

}

/* Code Principal */

$foo = new Foo;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>On peut pas vraiment non?</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1><?= $foo->ouiOuNonWinkWink() ?></h1>
    <p class="phrase"><?= $foo->phrase ?></p>

    <img src="<?= $foo->gif ?>" alt="gif">

<!-- Citations à venir ?
    <cite>C'est bon pour la digestion.</cite>
    <cite>Trop de travail tue le travail.</cite>
-->
    <footer>
        <p><small>Programmé en Orienté Objet.</small></p>
        <p><small>By <a href="https://media.giphy.com/media/VIjf1GqRSbf0OsNG0H/giphy.gif">ACo</a>, nous sommes le <?= $foo->getCurrentDate() ?>.</small></p>
    
    </footer>
    <script src="https://kit.fontawesome.com/3e42f51c8d.js" crossorigin="anonymous"></script>
    
</body>
</html>