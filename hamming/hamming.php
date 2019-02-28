<?php

function distance(string $a, string $b): int
{
    if (strlen($a) != strlen($b)) {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }

    $multipleIterator = new MultipleIterator();
    $distance = 0;

    $multipleIterator->attachIterator(new ArrayIterator(str_split($a)));
    $multipleIterator->attachIterator(new ArrayIterator(str_split($b)));

    foreach ($multipleIterator as $tuple) {
        list($charA, $charB) = $tuple;

        $distance += $charA !== $charB ? 1 : 0;
    }

    return $distance;
}
