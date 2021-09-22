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
        $arrayRomanNumber =[
            "M" => 1000,
            "CM" => 900,
            "D" => 500,
            "CD" => 400,
            "C" => 100,
            "XC" => 90,
            "L" => 50,
            "XL" => 40,
            "X" => 10,
            "IX" => 9,
            "V" => 5,
            "IV" => 4,
            "I" => 1
        ];

        $reste = $number; 

        foreach($arrayRomanNumber as $romanNumber => $value){
            while($reste >= $value){
                $result .= $romanNumber;
                $reste-=$value;
            }
        }
        return $result;
    }
    /*
    2 - En utilisant la méthode TDD et dans le langage de votre choix, créer une fonction romanToDecimal qui prend en 
    paramètre une chaîne de caractères représentant un entier entre 0 et 3 000 et renvoie cet entier. (6 points)

    */
    public static function romanToDecimal($romanNumber){

        $arrayRomanNumber =[
            "M" => 1000,
            "CM" => 900,
            "D" => 500,
            "CD" => 400,
            "C" => 100,
            "XC" => 90,
            "L" => 50,
            "XL" => 40,
            "X" => 10,
            "IX" => 9,
            "V" => 5,
            "IV" => 4,
            "I" => 1
        ];

        $result = "";

        foreach($arrayRomanNumber as $roman => $value){
            if($roman == $romanNumber){
                $result = $value;
            }

            /** Solution from internet, didn't had time to get here
             * while (strpos($romanNumber, $value) === 0) {
             * $result += $value;
             * $romanNumber = substr($romanNumber, strlen($value));
             * }
             */
        }

        return $result;
        
    }
}