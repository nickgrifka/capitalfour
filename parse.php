<?php
    //get input from the codepad response
    $input = '';
    $startString = '<td width="100%" style="vertical-align: top"><div class="highlight"><pre>';
    $endString = '</pre>';
    $startIndex = stripos($input, $startString);
    $endIndex = strripos($input, $endString);
    $length = $endIndex - $startIndex;
    $returnString = substr($input, $startIndex, $length);
    echo $returnString;
?>
