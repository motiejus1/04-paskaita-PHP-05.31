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
            echo $i;
            echo "<br>";
        }

    // N-zenkli skaiciu iskaidyti skaitmenimis
        $skaicius = "123587972";    
        //begalini cikla
        while($skaicius != 0) 
        {   
            $skaitmuo = $skaicius % 10;

            echo "skaicius";
        }


    ?>
</body>
</html>