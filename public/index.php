<?php

require_once('../src/Controller/Endpoint.php');

$endpoint = new Endpoint();

if ($_SERVER['REQUEST_METHOD'] = 'GET') {
    $tri = $_GET['tri'];
    $tab = $_GET['tab'];

    $tabTrie = $endpoint->routing($tri, $tab);

    require_once('../src/Controller/Endpoint.php');

    if ($tabTrie !== null) {
        echo ($tab) . "\n";
        echo json_encode($tabTrie)."\n";
    }
}