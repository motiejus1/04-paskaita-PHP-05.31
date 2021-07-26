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
            $aritmetika = $_GET["aritmetika"]; // 4+5
            // 4-5
            
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