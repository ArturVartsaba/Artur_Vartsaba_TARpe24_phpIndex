<?php
function clearVarsExcept($url, $varname) {
    $url=basename($url);
    if(str_starts_with($url, "?")){
        return "?$varname=".$_REQUEST[$varname];
    }
    return strtok($url, "?")."?$varname=".$_REQUEST[$varname];
}
echo "<h2>Matemaatilised funktsioonid</h2>";
$arv1 = 10;
$arv2 = 15;
$liitmine=$arv1+$arv2;
$lahutamine=$arv1-$arv2;
$korrutis=$arv1*$arv2;
$jagatis=$arv1/$arv2;
echo "arv1 on ".$arv1." ja arv2 on ".$arv2."<br>";
echo "Liitmine:".$liitmine."<br>";
echo "Lahutamine:".$lahutamine."<br>";
echo "Korrutamine:".$korrutis."<br>";
echo "Jagamine:".$jagatis."<br>"."<br>";

echo "<h2>Omistamise operaatorid</h2>";
// $arv1++ - suurendamime ühe võrra
$arv1++;
echo $arv1."- suurendamine ühe võrra";
echo "<br>";
$arv1--;
echo $arv1."- Vähendamine ühe võrra";
echo "<br>";
echo "<strong>Ruutjuur -sqrt()</strong> =".sqrt($arv1);

echo "<h2>Kõige väiksema ja suurima leidmine</h2>";
$arv_a = 62;
$arv_b = 12;
$arv_c = 49;
$arv_d = 5;
$arv_e = 21;
echo "Arvud on ".$arv_a.", ".$arv_b.", ".$arv_c.", ".$arv_d." ja ".$arv_e;
echo "<br>";
echo "Kõige väiksem arv = ".min($arv_a,$arv_b,$arv_c,$arv_d,$arv_e);
echo "<br>";
echo "Kõige suurem arv = ".max($arv_a,$arv_b,$arv_c,$arv_d,$arv_e);

echo "<h2>Ümardamine</h2>";
$arv = 3.456;
echo "Antud arv on ".$arv;
echo "<br>";
echo "Ümardatud arv = ".round($arv);
echo "<br>";
echo "Lagi = ".ceil($arv);
echo "<br>";
echo "Põrand = ".floor($arv);

echo "<h2>Juhuslik arv</h2>";
echo "Juhuslik arv = ".rand();
echo "<br>";
echo "Piiratud juhuslik arv (1-20) = ".rand(1, 20);

echo "<h2>Astendamine ja pii</h2>";
echo "arv 15 astedatud 6 = ".pow($arv2,6);
echo "<br>";
echo "Arv pii = ".pi();

echo "<h2>Arvmõistatus. Arva ära kaks arvu</h2>";
$salaarv1 =2;
$salaarv2 =7;
//kirjuta matemaatilise tehtega või funktsioonidega abil 5 vihjet
echo "<ol><li>Kui esimene arv korrutada 5-ga, siis tuleb ".($salaarv1*5)."</li>";
echo "<li>Kui teine arv astendada 3-ga, siis tuleb ".(pow($salaarv2, 3))."</li>";
echo "<li>Kui esimene arv jagada 4-ga, siis tuleb ".($salaarv1/4)."</li>";
echo "<li>Kui teine arv korrutada 7-ga, siis tuleb ".($salaarv2*7)."</li>";
echo "<li>Kui mõlemad arvud korrutada kokku, siis tuleb ".($salaarv1*$salaarv2)."</li></ol>";
echo "<br>";
?>
<form action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "leht")?>" method="post">
    <label for="arv1">Arv1: </label>
    <input type="number" id="arv1" name="arv1" min="0" max="10" step="1">
    <br>
    <label for="arv2">Arv2: </label>
    <input type="number" id="arv2" name="arv2" min="0" max="10" step="1">
    <input type="submit" value="Kontrolli">
</form>
<?php
//ja kirjuta arvude kontroll sarnaselt tekstfunktsioonidega
if(isset($_REQUEST["arv1"]) && ($_REQUEST["arv1"]!="")){
    echo "Esimene arv: ";
    if ($_REQUEST["arv1"] == $salaarv1) {
        echo $_REQUEST["arv1"]." on õige";
    } else{
        echo $_REQUEST["arv1"]." on vale";
    }
}
if(isset($_REQUEST["arv2"]) && ($_REQUEST["arv2"]!="")){
    echo "<br>";
    echo "Teine arv: ";
    if ($_REQUEST["arv2"] == $salaarv2) {
        echo $_REQUEST["arv2"]." on õige";
    } else{
        echo $_REQUEST["arv2"]." on vale";
    }
}