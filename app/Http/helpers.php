<?php

function getLastUriSegment($url)
{
    $parts = explode('/', $url);
    $last = end($parts);

    return $last;
}
