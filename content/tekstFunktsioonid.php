<?php
echo "<h2>Tekst funktsioonid</h2>";
$tekst='Veebirakendus on arvutitarkvara programm';
echo $tekst; //Näitab muutuja sisu
echo "<br>";
echo "<br>";
echo "Mitu sõna on lauses -str_word_count()= ".str_word_count($tekst). "tk";
//metshein.com -->PHP alused
echo "<br>";
echo "<br>";
echo "Kõik tähed muudab väiksemaks -strtolower()".strtolower($tekst);
echo "<br>";
echo "<br>";
echo "Kõik tähed muudab suuremaks -strtoupper()".strtoupper($tekst);
echo "<br>";
echo "<br>";
echo "Muudab esimese tähe suuremaks -ucfirst()".ucfirst($tekst);
echo "<br>";
echo "<br>";
echo "Mitu tähemärki on lauses -strlen()=".strlen($tekst);
echo "<br>";
echo "<br>";
echo "Eemaldab ülearused tühikud tekstist -trim()".trim($tekst);
echo "<br>";
echo "<br>";
echo "Eemaldab ülearused tühikud teksti ees -ltrim()".ltrim($tekst);
echo "<br>";
echo "<br>";
echo "Eemaldab ülearused tühikud teksti taga -rtrim()".rtrim($tekst);
echo "<h3>Tekst kui massiiv</h3>";
echo "Võtab tekstist esimese tähe -[0] ".$tekst[0];
echo "<br>";
echo "<br>";
echo "Võtab tekstist viies täht -[4] ".$tekst[4];
echo "<br>";
echo "<br>";
echo "Võtab tekstist alatest 4 tähest 5 tähte -substr()".substr($tekst, 3, 5);
echo "<br>";
echo "<br>";
print_r(str_word_count($tekst, 1));
echo "<br>";
echo "<br>";
echo "<h3>Teksti asendamine</h3>";
$asendus = "Tarkvara";
$otsitav_algus = 32;
$otsitav_pikkus = 14;
echo "Asendab teksti valitud vahemikus -substr_replace()".substr_replace($tekst, $asendus, $otsitav_algus, $otsitav_pikkus);
echo "<br>";
echo "<br>";
$otsi = array("on", "programm");
$asenda = array("----", "software");
echo "Otsib sõnad ja asendab neid teiste sõnadega - str_replace()".str_replace($otsi, $asenda, $tekst);
echo "<h2>MÕISTATUS - ARVA ÄRA EESTI LINNANIMI</h2>"; // viis vihjet
$linn = "Paide";
echo "Linn algab ".substr($linn, 0, -4)." tähega";
echo "<br>";
echo "Linn lõppeb ".$linn[4]." tähega";
echo "<br>";
echo "Linna nimi koosneb kokku ".strlen($linn)." tähest";
?>
<form action="tekstFunktsioonid.php" method="post">
    <label for="linn" id="linn">Sisesta linnanimi</label>
    <input type="tekt" id="linn" name="linn">
    <input type="submit" value="Kontrolli">
</form>
<?php
if(isset($_REQUEST["linn"])){
    if($_REQUEST["linn"] == "Paide"){
        echo "õige";
    }
    else{
        echo $_REQUEST["linn"]." on vale";
    }
}
