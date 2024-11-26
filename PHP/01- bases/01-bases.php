<!-- 
    Tout d'abord, Nous pouvons écrire du HTML dans un fichier ayant l'extension PHP
    l'inverse n'est pas possible 

-->

<style>
    h2 {
        margin:0;
        font-size: 15px;
        color: red;
    }
</style>

<h2> Ecriture et Affichage </h2>

<?php

    echo 'Bonjour'; // Echo est une instruction qui nous permet d'effectuer un affichage

    echo '<br>'; // nous pouvons également y mettre du HTML

    echo '<hr><h2>Commentaire</h2>'; // Si vous vous rendez dans le code source, Vous ne verrez pas le PHP ; Car le langage est interprété


?>

<strong> Bonjour </strong>

<?= 'Hello World'; ?> <!-- le = remplace le echo  -->

<!-- 
    Il est possible de fermer et réouvrir PHP pour mélanger du HTML Et PHP
-->

<?php 

    echo 'Texte' ; // ceci est un commentaire sur une ligne
    echo 'Texte' ; /*
    
            Ceci est un commentaire sur plusieur ligne
    
    */
    # ceci est un commentaire sur une ligne
    print 'Texte'; // autre instruction d'affichage pas de différence entre les deux (echo & print)

    echo '<hr><h2>Variable PHP : Types / Déclaration / Affection</h2>';


    // Declaration d'un variable en PHP avec le $

    $a = 127; // affectation de la valeur 127 dans la variable nommée :a 
    $b = 1.5; // affectation de la valeur 1.5 dans la variable nommée :b

    echo gettype( $a ); // il sagit d'un ENTIER "INTEGER"
    echo '<br>';
    echo gettype( $b ); //il sagit d'un chiffre à virgule "Double" en php

    $a = 'Une chaine';
    $b = '127';


    echo '<br>';
    echo gettype( $a ); // il sagit d'un STRING
    echo '<br>';
    echo gettype( $b ); // il sagit d'un STRING
    
    $a = true;
    $b = false;

    echo '<br>';
    echo gettype( $a ); // il sagit d'un Boolean
    echo '<br>';
    echo gettype( $b ); // il sagit d'un Boolean

    echo '<hr><h2>La Concaténation </h2>';

    $prenom = "Kevin";

    echo  'Bonjour ' . $prenom . '<br>'; // '.' ou ',' sert a concatener les informations 
    echo  'Bonjour ' , $prenom , '<br>';

    echo "Bonjour $prenom <br>";
    echo 'Bonjour $prenom <br>';

    define('IMPOSSIBLE_A_MODIFIER', 'Valeur de ma constante');
    echo IMPOSSIBLE_A_MODIFIER . '<br>'; // par convention , une constante se déclare toujours en MAJ

    echo __FILE__ . '<br>'; // AFFICHE LE CHEMIN VERS MON FICHIER 
    echo __DIR__ . '<br>'; // AFFICHE LE DOSSIER
    echo __LINE__ .'<br>'; // AFFICHE LE NUMERO DE MA LIGNE

    echo '<hr><h2>Les Opérateurs Arithmétique</h2>';

    $a = 10;
    $b = 5; 

    echo $a + $b . '<br>';
    echo $a - $b . '<br>';
    echo $a * $b . '<br>';
    echo $a / $b . '<br>';

    // -- Opérateur d'affectation 

    $a = $a + $b ; // $a est egale a 15 
    $a += $b;
    $a -= $b;
    $a *= $b;
    $a /= $b; 

    $a += 1; // met +1 à notre variable 
    $a++; // met +1 à notre variable 
    $a--; // // met -1 à notre variable 

    echo '<hr><h2>Struture Conditionnelles ( If / Else )</h2>';

    $var1 = 'test';
    $var2 = '';

        /*
            Isset & Empty 
        isset = test uniquement si une varia est défini / existe.
        empty = test si une variable est égale à 0 , est vide ou non définie.
        */

    if( empty( $var2 )){ // si var2 est égale à 0,"vide" 
        echo ' 0, vide ou non définie <br>';
    } else {
        echo 'Ma variable est définie <br>';
    }

    if( isset( $var2 )){
        echo 'var2 existe <br>';
    }else{
        echo 'var2 n\'existe pas !<br>';
    }

    $prenom2 = "0";
    $nom = "Houssin";
    $prenom2 = "5";

    if(isset($prenom2)) echo "Attention, prenom existe <br>";
    if(empty($prenom2)) echo "Attention, vous avez oublié de remplir votre prenom prenom existe <br>";

    echo '<hr>';

    $a = 10;
    $b = 4; 
    $c = 4;

    if( $a > $b ){ // SI $a est supérieur à $b
        print('A est bien supérieur à B.<br>');
    }else{
        print('A est bien inférieur à B.<br>');
    }

    if( $a > $b && $b > $c ){ // SI $a est supérieur à $b ET $b est supérieur $c
        print('Tous est ok pour les deux condition. <br>');
    }

    if($a == 2 || $b > $c ){ // SI $a est égale a 2 OU que $b est supérieur $c 
        print('Tous est ok pour les deux condition. <br> ');
    }

    if($a == 10 OR $b == 6){
        echo "L'une des deux condition est correcte. <br>";
    }

    /*
        Forme contracté du IF ...
        Une ecriture ternaire , un if ternaire le "?" remplace le IF et le ":" remplace le ELSE 
    */
    echo ($a == $b) ? "A est égal à 10<br>" : "a n'est pas égal à 10 <br>";

    $a = "1";
    $b = 1;

    if ($a == $b ) echo "Les deux variables sont égales"; // VALEUR 
    if ($a === $b ) echo "Les deux variables sont  strictement égales"; // TYPE + VALEUR

    echo '<hr><h2>Condition Switch</h2>';

    $couleur = 'bleu';

    switch($couleur){
        case 'bleu' :
            echo " Vous aimez le bleu";
            break;
        case 'rouge' :
            echo " Vous aimez le rouge";
            break;
        case 'Jaune' :
            echo " Vous aimez le Jaune";
            break; 
        case 'vert' :
            echo " Vous aimez le Vert";
            break;    
        default: // cas par défaut, si on ne rentre pas dans une case
            echo "Vous n'aimez ni bleu, ni le rouge, ....";
            break;
    }

    /*
        EXERCICE :
        Pouvez-vous faire la même chose que le switch
        ... avec des if/else ? est-ce possible ?
    */

    
    if ( $couleur == "bleu" ) {
        echo 'Vous aimez le bleu';
    } else if ($couleur == 'rouge') {
        echo 'Vous aimez le rouge';
    } else if ($couleur == 'jaune') {
        echo 'Vous aimez le jaune';
    } else if ($couleur == 'vert') {
        echo 'Vous aimez le vert';
    } else {
        echo "Vous n'aimez ni le bleu, ni le rouge,  ...";
    }


    echo '<hr><h2>Les Fonctions prédéfinies</h2>';

    // fonction prédéfini DATE https://www.php.net/manual/fr/function.date.php
    echo '<br>Date : <br>';
    print date('Y M d D');
    echo '<br>';


    // indique la position du caractère @ dans la chaine.
    $email = "kevin@hetic.fr";
    echo strpos($email, '@');

    // indique le nombre de caractère dont est composé ma variable
    echo '<br>';
    $phrase = "Je suis une phrase et j'aime ce que je suis.";
    echo strlen($phrase) . '<br>' ;


    // coupe ma chaine de caractère a partir d'une position de depart (0) et d'un nombre (50)
    echo '<br>';
    $article = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod cum iste atque? Facere consequuntur sed voluptate numquam aliquid ut perferendis sit exercitationem, inventore saepe totam consequatur, velit architecto earum accusamus blanditiis. Eius, optio tempore doloremque inventore quaerat eligendi officiis nostrum? Nobis eum voluptates aliquid pariatur provident, iusto distinctio? Quo, delectus!";
    echo substr($article, 0, 20) . '... <a href="http://google.com/">Lire la suite</a>';

    echo '<hr><h2>Les Fonctions Utilisateur</h2>';

    function seperator() {
        echo "<br><hr><br>";
    }

    seperator();

    function bonjour($prenom){
        return "Bonjour $prenom <br>";
    }

     echo bonjour('kevin');
     echo bonjour('Ousmane');
     echo bonjour('sandrine');
     echo bonjour('Mc daniel');

     /* 
     EXERCICE :
        1. Créer une fonction permettant de calculer la somme de 2 nb.
        2. Créer une fonction permettant de générer des titres h3
        3. Créer une fonction permettant de calculer la TVA 20% (1.2)
        4. Créer une fonction permettant de calculer la TVA plusieurs taux. normal : 20% ou 1.2 | réduit : 5.5% ou 1.055
     

 
*/
?>

