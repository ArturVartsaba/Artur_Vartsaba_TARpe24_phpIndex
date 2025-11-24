<?php
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
