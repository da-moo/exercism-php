<?php

function from(DateTime $date)
{
    $date = clone $date;
    $gigasecond = new DateInterval('PT1000000000S');

    return date_add($date, $gigasecond);
}
