<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skaiciuotuvas</title>
</head>
<body>

    <form action="skaiciuotuvas.php" method="get">
        <input type="text" name ="aritmetika" />
        <button type="submit" name="patvirtinti">Skaiciuoti</button>
    </form>

    <?php 

    if(isset($_GET["patvirtinti"])) {
        echo "Mygtukas paspaustas";
        
        if(isset($_GET["aritmetika"]) && !empty($_GET["aritmetika"])) {
            $aritmetika = $_GET["aritmetika"]; 
            // + 
            // teksta => masyva
            // 4+5 [4, '+', 5]
            // 150 - 3 [1,5,0,"",3]
            // $duomenuMasyvas = str_split($aritmetika, 1) //teksta i masyva i vienodas dalis
            // explode - teksta pavercia i masyva
            // suskaido i masyva pagal delimiter(simboli)

            //Kaip pritaikyti skirtingam simboliui? +,-, /, * , %
            //Skaiciai su tarpais, kaip istaisyt? 150 + 4
            $duomenuMasyvas = explode("+", $aritmetika);
            // [4, 5] 
            //$duomenuMasyvas[0] = 4
            //$duomenuMasyvas[1] = 5
            $duomenuMasyvas[2] = "+";

            //Kintamuju sukeitimas pasitelkian pagalbini kintamaji
            $pagalbinis = $duomenuMasyvas[2];// +
            $duomenuMasyvas[2] = $duomenuMasyvas[1];
            $duomenuMasyvas[1] = $pagalbinis;

            var_dump($duomenuMasyvas);
            
            // 
            // 4+5 => [4, '+', 5]
            // 4-5 => [4, '-', 5]
            // 4*5 => [4, '*', 5]
            // 4/5 => [4, '/', 5]
            // 4%5 => [4, '%', 5]
            
            echo $aritmetika; 
        } else {
            echo "Laukelis tuscias";
        }
    }
    
    // $_GET["patvirtinti"] = // true arba false reiksmes
    // jei mygtukas buvo paspaustas - true
    //jei ne - false



    // 1. Užduotis "Skaičiuotuvas"

    // Sukurti skaičiuotuvą. 
    // Skaičiuotuve įvedami du skaičiai ir veiksmas ivedamas i ta pati laukeli.
    // Rezultatas išvedamas į div.
    
    //2. Papildyti Užduotis "Skaičiuotuvas" taip, 
    // kad rezultatas būtų atvaizduojamas tame pačiame lange

    
    ?>
</body>
</html>