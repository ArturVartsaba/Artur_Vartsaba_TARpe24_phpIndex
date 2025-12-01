<?php
$serverinimi='localhost';
$kasutajanimi='artur';
$parool='12345';
$andmebaasinimi='artur';
$yhendus= new mysqli($serverinimi, $kasutajanimi, $parool, $andmebaasinimi);
$yhendus->set_charset("utf8");