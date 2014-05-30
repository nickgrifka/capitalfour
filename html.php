<?php
    //get input from the html response
    $input = ''
    $startString = 'resource was found at <a href="' ;
    $endString = '">http://';
    $startIndex = stripos($input, $startString);
    $endIndex = strripos($input, $endString);
    $length = $endIndex - $startIndex - strlen($startString);
    $returnString = substr($input, $startIndex+strlen($startString), $length);
    echo $returnString;
?>