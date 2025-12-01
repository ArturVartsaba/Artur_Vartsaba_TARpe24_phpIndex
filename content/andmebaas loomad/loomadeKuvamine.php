<?php
require ('conf.php');
//tabelist kustutamine
global $yhendus;
if(isset($_REQUEST["kustuta"])) {
    $kask=$yhendus->prepare("DELETE FROM loomad WHERE loomId=?");
    $kask->bind_param("i", $_REQUEST['kustuta']);
    $kask->execute();
}
?>
<!DOCTYPE html>
<html lang="et">
<link rel="stylesheet" href="andmebaasStyle.css">

<head>
    <title>Loomad SQL andmebaasist</title>
</head>

<body>

<h1>Loomade tabeli sisu</h1>
<table>
    <tr>
        <td>Loomanimi</td>
        <td>Kaal</td>
        <td>Värv</td>
    </tr>

<?php
global $yhendus;
$kask=$yhendus->prepare("SELECT loomId, loomanimi, kaal, varv FROM loomad ORDER BY kaal DESC");
$kask->bind_result($loomid, $loomanimi, $kaal, $varv);
$kask->execute();

while($kask->fetch()){
    echo "<tr>";
    echo "<td bgcolor='$varv'>".$loomanimi."</td>";
    echo "<td>".$kaal."</td>";
    echo "<td>".$varv."</td>";
    echo "<td><a href='?kustuta=$loomid'>xxx</a></td>";
    echo "</tr>";
}
?>
</table>
<a href="loomaLisamine.php">Lisa loom</a>

</body>

</html>

