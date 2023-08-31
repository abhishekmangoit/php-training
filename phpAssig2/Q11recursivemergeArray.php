<?php
   $user1 = array("name"=>"Abhishek","email"=>"abhishek@gmail.com","password"=>"@123","age"=>"23");
   $user2 = array("name"=>"Mohit","email"=>"mohit@gmail.com","password"=>"@123");
   echo "<pre>";
   echo "First ";
   print_r($user1);
   echo "Second ";
   print_r($user2);
   echo "Recursive merged ";
   print_r(array_merge_recursive($user1,$user2));
?>
