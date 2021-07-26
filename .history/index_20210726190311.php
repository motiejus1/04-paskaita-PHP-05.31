<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04 pasaita PHP</title>
</head>
<body>
    <?php 
    //ciklai, masyvai, kai mums veiksma atlieka tas pats failas
    
    // Atvaizduoti skaicius nuo 1 iki 201

//    $i = 0;

        for($i = 1; $i<=201; $i++) {
            // echo $i;
            // echo "<br>";
        }

    // N-zenkli skaiciu iskaidyti skaitmenimis
        $skaicius = "123587972";    
        //begalini cikla
        while($skaicius != 0) 
        {   
            $skaitmuo = $skaicius % 10;
            $skaicius = intval($skaicius / 10);
            echo $skaitmuo;
            echo "<br>";
        }

    //masyvas
    $masyvas = array("elementas1", "elementas2", "elementas3");
    
    // echo $masyvas; masyvui netinkamas
    var_dump($masyvas);

    //Masyvo elementu isvedimas;
    // Kaip isvesti norima elementa?
    // Kaip isvesti visus masyvo elementus atskirai?

    echo $masyvas[0];
    
    $masyvoelementas = $masyvas[0];
    
    echo $masyvoelementas;

    $masyvas[1] = "labas";

    var_dump($masyvas);
    
    //pasiimt masyvo ilgi: masyvas.lenght
    //PHP: count($masyvas) - grazina skaiciu, kiek elementu yra masyve
    //count($masyvas) = 3
    // 0 - 2; 0 1 2
    for($i = 0; $i < count($masyvas); $i++) {
        echo $masyvas[$i];
        echo "<br>";
    }

    //foreach, nebutina count($masyvas)

    foreach($masyvas as $elementas) {
        echo $elementas;
        echo "<br>";
    }

    //kaip pildyti masyva?
    //javascrpt panaudoti push funkcija,
    //PHP

    $pildomasmasyvas = array();

    var_dump($pildomasmasyvas);

    //papildyti 1000 atsitiktiniu skaiciu
    //array_push()
    // array_push($pildomasmasyvas,"pirmasskaicius");// 1 reiksme i masyva
    // array_push($pildomasmasyvas,"pirmasskaicius", "antrasskaicius");// 2 reiksme i masyva


    // o kaip sugeneruot atsitiktini neigiama skaiciu?
    // echo $aSkaicius;
    // echo "<br>";

    for($i=0; $i< 1000; $i++) {
        $aSkaicius = rand(1, 1000000) * (-1);
        array_push($pildomasmasyvas,$aSkaicius);
    }

    $mas = array(0,1,2,3);

    var_dump($pildomasmasyvas,$mas);

    //
    var_dump($pildomasmasyvas);
    var_dump($mas);

    //Masyvu tipai

    // Suskaiciuojamu masyvu
    $mas1 = array("elementas","elementas1", "elemntas")


    ?>
</body>
</html>