<?php
echo "<h2>Ajafunktsioonid</h2>";
//ajavööndi lisamine
date_default_timezone_set('Europe/Tallinn');

echo "Praegune aeg = ".date('G:i' , time());

echo "<br>";
echo "<br>";

echo "Praegune kuupäev ja aeg = ".date('d.m.Y G:i' , time());

echo "<br>";
echo "<br>";

echo "Pikk kuupäev = ".date('d.F.Y');

echo "<br>";
echo "<br>";

//kuude massiiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevade massiiv
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
echo "Eestistatud pikk kuupäev = ".$paev.'.'.$kuu.' '.$aasta;