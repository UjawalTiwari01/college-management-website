<?php

   $name = "Ujawal";
   $income = 200;

   /* php data types
   1. String 
   2. Integer
   3. Float
   4. boolean
   5. Object
   6. Array
   7. NULL
   */
  
   // String -- Sequence of characters
   $name = "Ujawal";
   $friend = "Rahul";
   echo " Data Type Series ";
   echo "<br>";
   echo "1. String : ";
   echo "<br>";
   echo "friend of $name is $friend";
   echo "<br>";
   //Integer -- Non decimal Number
   $income = 455;
   $debts = -200;
   echo "2. Integer : ";
   echo "<br>";
   echo $income;
   echo "<br>";
   echo $debts;
   echo "<br>";
   // Float -- Decimal Point Number
   $income = 344.5;
   $debts = -45.5;
   echo "3. Float : ";
   echo "<br>";
   echo $income;
   echo "<br>";
   echo$debts;
   echo "<br>";
   // Boolean -- Can be either true or false
   echo "4. Boolean : ";
   echo "<br>";
   $x = true;
   $is_friend = false;
   echo "Show Full Data Type with Use var_dump : ";
   echo "<br>";
   echo var_dump($x);
   echo "<br>";
   echo var_dump($is_friend);
   echo "<br>";
   // Object -- Instances Of Classes 
   // Employee is a class --> ujawal can be one object
   echo "5. We will Learn About of Object Next Time : ";
   echo "<br>";
   echo "5. Suppose --> Employee is a class -- Ujawal can be one Object";
   echo "<br>";
   // Array -- Used to store multiple values in a singl
   echo "6. Array : ";
   $friend = array("Rohan","Vivek","Avaneesh","Kumar");
   echo var_dump($friend);
   echo "<br>";
   echo $friend[0];
   echo "<br>";
   echo $friend[1];
   echo "<br>";
   echo $friend[2];
   echo "<br>";
   echo $friend[3];
   echo "<br>";
   echo $friend[4];
   echo "<br>";
  // echo var_dump($friend[4]);
   echo "<br>";
   // NULL --- Empty space 
   echo "7. Null ";
   echo "<br>";
   $name = NULL;
   echo $name;
   echo "<br>";
   echo "If you want to Show as a Output Then You Can Use --> var_dump , i will use below";
   echo "<br>";
   echo var_dump($name);
   echo "<br>";

?>