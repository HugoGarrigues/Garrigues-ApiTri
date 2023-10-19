<?php

class ArrayLib
{
    static function BubbleSort ($tab) {
        for ($i = 0; $i < count($tab); $i++) {
            for($j = 0; $j< count($tab) - 1 ; $j++) {
                if ($tab[$j+1] < $tab[$j]) {
                    $t = $tab[$j + 1];
                    $tab[$j+1] = $tab[$j];
                    $tab[$j] = $t;
                }
            }
        }
        return $tab;
    }

    static function QuickSort($tab)
    {
        if (count($tab) < 2) {
            return $tab;
        }

        $left = $right = array();
        reset($tab);
        $pivot_key = key($tab);
        $pivot = array_shift($tab);
        foreach ($tab as $k => $v) {
            if ($v < $pivot)
                $left[$k] = $v;
            else
                $right[$k] = $v;
        }

        return array_merge(self::QuickSort($left), array($pivot_key => $pivot), self::QuickSort($right));
    }

}