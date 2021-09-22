<?php declare(strict_types=1);

use phpDocumentor\Reflection\Types\Boolean;

class ExoTDD
{
    /*
    1 - En utilisant la méthode TDD et dans le langage de votre choix, créer une fonction decimalToRoman qui prend en paramètre un entier 
    entre 0 et 3 000 et renvoie sa représentation en chiffres romains sous forme de chaîne de caractères.
    Vous pouvez commencer par des tests simples : 0 (“”), 1 (“I”), 2 (“II”), 4 (“IV”), 5 (“V”), 6 (“VI”)… puis des nombres à plusieurs chiffres.
    */
    public static function decimalToRoman($number){
        
        switch ($number) {
            case '1':
                return "I";
                break;
            case '2':
                return "II";
                break;
            case '3':
                return "III";
                break;
            case '4':
                return "IV";
                break;
            default:
                return "";
                break;
        }
    }
    /*
    2 - En utilisant la méthode TDD et dans le langage de votre choix, créer une fonction romanToDecimal qui prend en 
    paramètre une chaîne de caractères représentant un entier entre 0 et 3 000 et renvoie cet entier. (6 points)

    */
}