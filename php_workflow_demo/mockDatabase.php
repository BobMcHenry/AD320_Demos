<?php

  $mockDBQuery = array(
    array("pk"=>0, "name"=> "Bob", "phone"=>"111-111-1111"),
    array("pk"=>1, "name"=> "Ted", "phone"=>"222-222-2222"),
    array("pk"=>2, "name"=> "Fabio", "phone"=>"333-333-3333"),
    array("pk"=>3, "name"=> "Plato", "phone"=>"444-444-4444"),
    array("pk"=>4, "name"=> "The Baron", "phone"=>"555-555-5559")
  );
  // echo "<br>";
  // ECHO($mockDBQuery);
  // echo "<br>";
  // print_r($mockDBQuery);
  // echo "<br>";
  // var_dump($mockDBQuery);

  // $test = "test";
  //
  // echo "My Variable is $test <br>";
  // echo 'My Variable is $test <br>';
/* This array is set to model what a `SELECT * FROM contacts`
   db Query would return. Note it is a 2d array. The outer
   array contains individual arrays that hold the key:value pairs
   from the db query. The key would be the column name from the
   db and the value would be the row data from that column.

  pk  | name | phone
  0   | Bob  | 111-111-1111

  becomes
  ["pk"=>0, "name"=> "Bob", "phone"=>"555-555-5555"]

*/

?>
