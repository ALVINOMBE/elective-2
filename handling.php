<?php

    $mytext = fopen("mytext.txt", "r+");
    echo fread($mytext, filesize("mytext.txt"));
    $write = "my write";
    fwrite($mytext, $write);
    $text2 = "next text";
    fwrite($mytext, $text2);

    fclose($mytext);