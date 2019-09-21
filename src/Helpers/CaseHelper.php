<?php

/**
 * @param string $string
 * @return string
 */
function unCamelCase(string $string): string
{
    $string = preg_replace('/([a-z])([A-Z])/', "\\1_\\2", $string);
    return strtolower($string);
}

/**
 * @param $string
 * @return mixed|string|string[]|null
 */
function camelCase($string): string
{
    $i = array("-", "_");
    $string = preg_replace('/([a-z])([A-Z])/', "\\1 \\2", $string);
    $string = preg_replace('@[^a-zA-Z0-9\-_ ]+@', '', $string);
    $string = str_replace($i, ' ', $string);
    $string = str_replace(' ', '', ucwords(strtolower($string)));
    $string = strtolower(substr($string, 0, 1)) . substr($string, 1);
    return $string;
}