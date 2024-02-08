<?php
$hostnom = 'host=btssio.dedyn.io';
$usernom = 'ELHARIM';
$password = '08012005';
$bdd = 'ELHARIM_biblio';

try {
    $monPdo = new PDO("mysql:$hostnom;dbname=$bdd;charset=utf8", $usernom, $password);
    $monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    $monPdo = null;
}
?>