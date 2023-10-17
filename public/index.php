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
        echo json_encode($tabTrie)."\n";
    }
}

$randomTab = [];
for ($i=0;$i<10;$i++) {
    $n = rand(1, 9);
    $randomTab[] = $n;
}

$randomTabJSON = json_encode($randomTab);


$tri1 = 'http://localhost/Exercice-Api-Tri/public/index.php?tri=quickSort&tab='.$randomTabJSON;
$tri2 = 'http://localhost/Exercice-Api-Tri/public/index.php?tri=bubbleSort&tab='.$randomTabJSON;

echo '<a href="'.$tri1.'"><button>QuickSort</button></a>'."\n";
echo '<a href="'.$tri2.'"><button>BubbleSort</button></a>'."\n";

#http://localhost/Exercice-Api-Tri/public/index.php?tri=quickSort&tab=[5,3,1,4,2]
#http://localhost/Exercice-Api-Tri/public/index.php?tri=bubbleSort&tab=[5,3,1,4,2]