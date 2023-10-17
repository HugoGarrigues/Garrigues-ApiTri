<?php

require_once('../src/Endpoint.php');
require_once('../src/ArrayLib.php');

$endPoint = new Endpoint();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $tri = $_GET['tri'];
    $tab = $_GET['tab'];

    $tabTrie = $endPoint->routing($tri, $tab);

    if ($tabTrie !== null) {
        echo ($tab)."\n";
        echo json_encode($tabTrie);

    }
}

#http://localhost/Exercice-Api-Tri/public/index.php?tri=quickSort&tab=[5,3,1,4,2]
#http://localhost/Exercice-Api-Tri/public/index.php?tri=bubbleSort&tab=[5,3,1,4,2]