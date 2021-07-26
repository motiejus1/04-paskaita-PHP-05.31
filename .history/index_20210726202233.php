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
    $mas1 = array("elementas","elementas1", "elemntas2");

    // Asociatyvus masyvas

    $asocMasyvas = array(
        "pirmas" => "verte1",
        "antras" => "verte2",
        "trecias" => "verte3"
    );

     // Kaip isvesti norima elementa?

    // Kaip isvesti visus masyvo elementus atskirai?
    var_dump($asocMasyvas);
    echo $asocMasyvas["antras"];
    //Pakeiskime reiksme
    $asocMasyvas["antras"] = "pakeista reiksme";
    $kintamajam = $asocMasyvas["antras"];
    // count($asocMasyvas) == 3

    echo "_________________________________";

    foreach($asocMasyvas as $elementas) {

        echo $elementas;
        echo "<br>";
        // echo $asocMasyvas[$i];
        //$asocMasyvas["pirmas"]
        //$asocMasyvas["antras"]
        //$asocMasyvas["trecias"]
    }

    //kas atsitiks jeigu mes toki masyva papildysime su array_push() funkcija

    array_push($asocMasyvas, "papildyta_reiksme");
    array_push($asocMasyvas, "papildyta_reiksme");
    array_push($asocMasyvas, "papildyta_reiksme");

    
    
    //masyva papildyti taip, kad elementas turetu ne eiles numeri, o kazkoki pavadinima?

    $asocMasyvas["ketvirtas"] = "nauja reiksme kuri turi pavadinima";


    $asocMasyvas["ketvirtas"] = 'naujas';
    var_dump($asocMasyvas);

    echo $asocMasyvas[0];
    // $mas2 = array(1,2,3);// 0,1,2
    // $mas2[3] = "naujai papildyta reiksme";
    
    // for ?

    //Sukurti asociatyvu masyva kuriame kiekienas elementas turi varda ir reiksme. 100 elementu

    // array(
    // "vardas1" => "reiksme1"
    // "vardas2" => "reiksme2"
    // )

    $pradinisMasyvas = array();

    // ciklo kuris suktusi 100 kartu
    // 0 - reiksme1
    // 1 - reiksme2

    for($i = 0; $i < 100 ; $i++) {
        $pradinisMasyvas["vardas".($i + 1 )] = "reiksme". ($i + 1 );
        // echo "vardas".($i + 1 ); //0-99
    }

    var_dump($pradinisMasyvas);

    //Dvimatis masyvas (matrica) arba  daug masyvu/masyvas masyve

    $dvimatisMasyvas = array(
        array("knyga1","knyga2", "knyga3"), // 0 lentyna
        array("zaidimas","zaidimas1", "zaidimas2"), // 1 lentyna
        array("tuscia"), // 2 lentyna
        array("rubai1", "rubai2", "rubai3"), //3 lentyna
    );

    //Isvesk viska kas yra 4 lentynoje?
    //Kaip papildyti tuscia lentyna?
    //Kaip isvesti viska ka turim?
    //kaip pakeisti lentynoje esanti turini?

    var_dump($dvimatisMasyvas);

    //masyvas
    var_dump($dvimatisMasyvas[3]); // ? ar veiks? ne?

    //Kaip isvesti "rubai3"?

    echo $dvimatisMasyvas[3][2];

    foreach($dvimatisMasyvas[3] as $elementas)
    {
        echo $elementas."<br>";
    }

    //kaip tai padaryti su for?
    for($i = 0; $i < count($dvimatisMasyvas[3]); $i++) {
        echo $dvimatisMasyvas[3][$i]. "<br>" ;
    }

    array_push($dvimatisMasyvas[2],"batai");
    
    array_push($dvimatisMasyvas[2],"batai");
    var_dump($dvimatisMasyvas);

    ?>
</body>
</html>