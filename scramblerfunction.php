<?php

function displayKey($key)
{
    var_dump($key);
    printf(" value = '%s' ", $key);
}

function scrambleData($originalData, $key)
{
    $originalKey  = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $data = '';
    $length = strlen($originalData);
    for ($i = 0; $i < $length; $i++) {
        $cureentChar = $originalData[$i];
        $position = strpos($originalKey, $cureentChar);
        if ($position !== false) {
            $data .= $key[$position];
        } else {
            $data .= $cureentChar;
        }
    }
    return $data;
}
