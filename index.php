<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Artur PHP-tööde leht</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/joonis.css">
</head>
<body>
<?php
//päis
include("header.php");
?>
<?php
include("nav.php");
?>
<div class="flex-container">
    <div>
        <?php
        //sisu - laetakse content kaustast
        if(isset($_GET["leht"])){
            include('content/'.$_GET["leht"]);
        } else {
            include('content/kodu.php');
        }
        ?>
    </div>
    <div>
       <strong>PHP</strong> on skriptimiskeel, mida kasutatakse peamiselt serveripoolsetes lahendustes dünaamiliste veebilehtede loomisel.
        PHP toetab objektorienteeritud programmeerimist, andmebaasidega suhtlemist ning moodulite kaudu veel paljusid protokolle ja rakendusi.
    </div>
    <div>
        <img src="image/phpPilt.png" alt="PHP pilt" width="256" height="128">
    </div>
</div>
<?php
//jalus
include("footer.php");
?>
</body>
</html>