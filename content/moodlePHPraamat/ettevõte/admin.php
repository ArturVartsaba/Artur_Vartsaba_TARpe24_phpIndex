<?php
require('../config.php');
global $yhendus;

// Uue toote lisamine
if (isset($_REQUEST["uustoode"])) {
    $kask = $yhendus->prepare("INSERT INTO toode (nimi, hind, pilt) VALUES (?, ?, ?)");
    $kask->bind_param("sis", $_REQUEST["nimi"], $_REQUEST["hind"], $_REQUEST["pilt"]);
    $kask->execute();
    header("Location: ".$_SERVER["PHP_SELF"]);
    $yhendus->close();
    exit();
}

// Toote kustutamine
if (isset($_REQUEST['kustutasid'])) {
    $kask = $yhendus->prepare("DELETE FROM toode WHERE id=?");
    $kask->bind_param("i", $_REQUEST['kustutasid']);
    $kask->execute();
}

//toote muutmine
if (isset($_REQUEST["muutsid"])) {
    $kask = $yhendus->prepare("UPDATE toode SET nimi=?, hind=?, pilt=? WHERE id=?");
    $kask->bind_param(
        "sis",
        $_REQUEST["nimi"],
        $_REQUEST["hind"],
        $_REQUEST["pilt"]
    );
    $kask->execute();
}
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>admin</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<?php
include("header.php");
?>
<?php
include("nav.php");
?>

<div>
    <h2>tooted</h2>
    <ul>
        <?php
        $kask = $yhendus->prepare(
            "SELECT id, nimi FROM toode"
        );
        $kask->bind_result($id, $nimi);
        $kask->execute();
        while ($kask->fetch()) {
            echo "<li class='noStyle'><a class='noStyle".$_SERVER["PHP_SELF"].
                "?id=$id'>".htmlspecialchars($nimi)."</a></li>";
        }
        ?>
    </ul>
    <a href="<?=$_SERVER['PHP_SELF']?>?lisamine=jah">Lisa ...</a>
</div>

<div id="sisukiht">
    <?php
    // Ühe toode kuvamine või muutmine
    if (isset($_REQUEST["id"])){
        $kask = $yhendus->prepare("SELECT id, nimi, hind, pilt FROM toode WHERE id=?");
        $kask->bind_param("i", $_REQUEST["id"]);
        $kask->bind_result($id, $nimi, $hind, $pilt);
        $kask->execute();

        if ($kask->fetch()) {
            if (isset($_REQUEST["muutmine"])) {

            }
        }
    }
    ?>
</div>

<?php
include("footer.php");
?>
</body>
</html>
<?php
$yhendus->close();
?>