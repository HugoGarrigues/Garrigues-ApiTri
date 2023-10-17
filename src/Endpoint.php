<?php
class Endpoint
{
    public function routing($tri, $tab)
    {
        $tab = json_decode($tab);

        var_dump($tri)."\n";
        var_dump($tab)."\n";

        switch ($tri) {
            case 'bubbleSort':
                return ArrayLib::bubbleSort($tab);
            case 'quickSort':
                return ArrayLib::quickSort($tab);
            default:
                return null;
        }
    }
}