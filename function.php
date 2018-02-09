<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 09.02.18
 * Time: 8:18
 */

function declOfNum($number, $fields)
{
    $cases = array (2, 0, 1, 1, 1, 2);
    $mod = $number % 100;
    $suffixKey = ($mod > 7 && $mod < 20) ? 2: $cases[min($mod % 10, 5)];

    $return = $fields[$suffixKey];

    $return = $number . " " . $return;

    return $return;
}

echo declOfNum(1, ['элемент', 'элемента', 'элементов']);