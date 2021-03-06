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

    //Funkcijos

    function skaiciavimoFunkcija($simbolis, $aritmetika ) {
        $duomenuMasyvas = explode($simbolis, $aritmetika);

        // var_dump($duomenuMasyvas);
        $duomenuMasyvas[2] = $simbolis;

        //Kintamuju sukeitimas pasitelkian pagalbini kintamaji
        $pagalbinis = $duomenuMasyvas[2];// +
        $duomenuMasyvas[2] = $duomenuMasyvas[1];
        $duomenuMasyvas[1] = $pagalbinis;
        if($simbolis == "+") {
            return $duomenuMasyvas[0] + $duomenuMasyvas[2];
        } else if($simbolis == "-") {
            return $duomenuMasyvas[0] - $duomenuMasyvas[2];
        } else if($simbolis == "/") {
            return $duomenuMasyvas[0] / $duomenuMasyvas[2];
        } else if($simbolis == "*") {
            return $duomenuMasyvas[0] * $duomenuMasyvas[2];
        } else if($simbolis == "%") {
            return $duomenuMasyvas[0] % $duomenuMasyvas[2];
        }
        return "Veiksmo neimanoma atlikt";
    }

    if(isset($_GET["patvirtinti"])) {
        if(isset($_GET["aritmetika"]) && !empty($_GET["aritmetika"])) {
            $aritmetika = $_GET["aritmetika"];

            // " " - tai yra simbolis
            //Galbut funkcija, kuri leistu ieskoti tam tikru simboliu ir juos panaikinti?
            //str_replace - ji randa mums norima simboli, ir ta surasta simboli pakeisti

            $aritmetika = str_replace(" ","",$aritmetika);

            $rezultatas = 0;
            $duomenuMasyvas = 0;
            // + 
            // teksta => masyva
            // 4+5 [4, '+', 5]
            // 150 - 3 [1,5,0,"",3]
            // $duomenuMasyvas = str_split($aritmetika, 1) //teksta i masyva i vienodas dalis
            // explode - teksta pavercia i masyva
            // suskaido i masyva pagal delimiter(simboli)

            //Paieska tekstineje eilute: ar yra simbolis + - / *
            //strpos - string position
            // ji iesko ar tekstineje eilute yra kazkoks musu nurodytas simbolis

            $simbolioPozicija = strpos($aritmetika,"+");
            // jeigu jinai neranda simbolio, grazinama false
            // jeigu simbolis yra surastas - grazina simbolio pozicija

            // 4+5 veikia 1
            // 10+5 nebeveikia pozicija? 2
            //patikrinti ne kurioje pozicija yra simbolis? o tiesiog ar musu
            //kintamasis yra !false

            //ar simbolis ir kad simbolis viena karta
            //substr_count - substring count, grazina tik skaiciu
            //skaiciuoja kiek kartu pasikartoja tekstas/simbolis tekstineje eiluteje

            // $simboliuSk = substr_count($tekstas, "+");

            // echo "Pliusu skaicius: ".$pliusuSk;

            if(strpos($aritmetika,"+") != false && substr_count($aritmetika, "+") == 1) {
                $rezultatas = skaiciavimoFunkcija("+", $aritmetika);
            } else if(strpos($aritmetika,"-") != false && substr_count($aritmetika, "-") == 1) {
                $rezultatas = skaiciavimoFunkcija("-", $aritmetika);
            } else if(strpos($aritmetika,"/") != false && substr_count($aritmetika, "/") == 1) {
                $rezultatas = skaiciavimoFunkcija("/", $aritmetika);
            } else if(strpos($aritmetika,"*") != false && substr_count($aritmetika, "*") == 1) {
                $rezultatas = skaiciavimoFunkcija("*", $aritmetika);
            } else if(strpos($aritmetika,"%") != false && substr_count($aritmetika, "%") == 1) {
                $rezultatas = skaiciavimoFunkcija("%", $aritmetika);
            } else {
                $rezultatas = "Veiksmo zenklas neteisingas";
            }

            //PHP echo komanda jeigu true/false kintamaji - 1 arba tuscia eilute
            //var_dump - mes galime isvedineti masyvus
            //var_dump - bet koki kintamaji, kad patikrintume kokio jisai yra tipo
            
            echo "<div>";
            echo $aritmetika;
            echo "</div>";

            echo "<div>";
            echo $rezultatas;
            echo "</div>";
            
        } else {
            echo "Laukelis tuscias";
        }
    }
    
    // $_GET["patvirtinti"] = // true arba false reiksmes
    // jei mygtukas buvo paspaustas - true
    //jei ne - false



    // 1. U??duotis "Skai??iuotuvas"

    // Sukurti skai??iuotuv??. 
    // Skai??iuotuve ??vedami du skai??iai ir veiksmas ivedamas i ta pati laukeli.
    // Rezultatas i??vedamas ?? div.
    
    //2. Papildyti U??duotis "Skai??iuotuvas" taip, 
    // kad rezultatas b??t?? atvaizduojamas tame pa??iame lange

    //3. Turi buti matoma skaiciavimo istorija
    //Vieta, kurioje saugoma informacija
    //Duomenu baze
    //Cookies - sausainiukai //Duomenu failas

    //laikinasis duomenu failas

    
    ?>
</body>
</html>