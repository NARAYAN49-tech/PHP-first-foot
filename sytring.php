<?php
    $str = "This is a string";
    echo $str."\n";
    $len = strlen($str);
    echo "The length of the string is  ".$len.$len;
    echo $len;
    echo "The reversed string is ".strrev($str). "\n Thank You.. \n". strpos($str, "is")." \n More Thanks\n";
    $str = "The replaced string is ".str_replace("is","at",$str). " vary gladly thank you \n".$str;
    echo $str;
?>