<?php

require_once(__DIR__."/../Library/ArrayLib.php");
class Endpoint
{
    public function routing($tri, $tab)
    {
        $tab = json_decode($tab);

        switch ($tri) {
            case 'bubbleSort':
                return \ArrayLib::bubbleSort($tab);
            case 'quickSort':
                return \ArrayLib::quickSort($tab);
            default:
                return null;
        }
    }
}