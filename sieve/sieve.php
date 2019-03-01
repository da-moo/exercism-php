<?php

declare(strict_types=1);

function sieve(int $var): array
{
    $range = array_fill(2, $var - 1, true);

    for ($i = 2; $i < sqrt($var); ++$i) {
        if ($range[$i]) {
            for ($j = pow($i, 2), $k = 0; $j <= $var; $j = pow($i, 2) + $k * $i) {
                $range[$j] = false;
                ++$k;
            }
        }
    }

    return array_keys(array_filter($range));
}
