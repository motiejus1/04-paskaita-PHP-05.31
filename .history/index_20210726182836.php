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

    for($i = 0; $i <;$i++) {

    }

    ?>
</body>
</html>