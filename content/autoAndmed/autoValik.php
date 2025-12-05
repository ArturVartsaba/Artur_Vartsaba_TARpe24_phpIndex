<?php
require('config.php');
//kustutamine
global $yhendus;
if (isset($_REQUEST['kustuta'])){
    $kask=$yhendus->prepare("DELETE FROM auto WHERE auto_id=?");
    $kask->bind_param("i", $_REQUEST['kustuta']);
    $kask->execute();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Autode valik SQL andmebaasist</title>
    <link rel="stylesheet" href="autoStyle.css">
</head>

<body>
    <h1>Autode valik SQL andmebaasist</h1>
</body>

<div id="menyy">
    <ul>
        <?php
        global $yhendus;
        $kask=$yhendus->prepare("SELECT autoId, autonumber FROM auto");
        $kask->bind_result($autoId,$autonumber);
        $kask->execute();
        while($kask->fetch()){
            echo "<li><a href='?autoId=$autoId'>".$autonumber."</li></a>";
        }
        ?>
    </ul>
</div>

<div id="sisu">
    <?php
    global $yhendus;
    if(isset($_REQUEST["autoId"])){
        $kask=$yhendus->prepare("SELECT autoId, autonumber, mark, varv, pilt FROM auto WHERE autoId=?");
        $kask->bind_result($autoId,$autonumber,$mark,$varv,$pilt);
        $autoId=$_REQUEST["autoId"];
        $kask->bind_param("i",$autoId); //i-integer
        $kask->execute();
        if ($kask->fetch()){
            echo "<h3>" . $autonumber . "</h3>";
            echo "<div>".$mark.", ".$varv."</div>";
            echo "<img src='$pilt.png'>";
            echo "<br><br>";
            echo "<a></a>";
            echo "<a href='?kustuta=$autoId'>Kustuta</a>";
        }
    }
    ?>
</div>

<div id="footer">
    Leht on tehtud Veebi tunnis
</div>

</html>
