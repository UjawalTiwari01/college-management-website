<?php
    echo "With The Help Of String Function : I Will Change One By One And Various Type <br>";


    $name = "Ujawal Is Second Name Of Rahul";
    echo $name;
    echo "<br>";
    echo "1. strlen Function Use to count The String Length";
    echo "<br>";
    echo "The Length of " ."My Name is " . strlen($name);
    echo "<br>";
    echo "2. str_word_coun Function Use To Count The Word In String";
    echo "<br>";
    echo "Count The Word of --> Ujawal Is Second Name Of Rahul <br>";
    echo str_word_count($name);
    echo "<br>";
    echo "3. Strrev Function Use To Reverse The String";
    echo "<br>";
    echo strrev($name);
    echo "<br>";
    echo "I want To Find The Position Of My Word In-- Ujawal Is Second Name Of Rahul";
    echo "<br>";
    echo "I want To Know Rahul's Position In Sentences";
    echo "<br>";
    echo "4. Strpos Function Use To Change The Position ";
    echo "<br>";
    echo strpos($name, "Rahul");
    echo "<br>";
    echo "5. str_replace Function Use To Replace The Values ";
    echo "<br>";
    echo "I Will Replacing Of Tiwari on Ujawal Place";
    echo "<br>";
    echo str_replace("Ujawal","Tiwari",$name);


?>