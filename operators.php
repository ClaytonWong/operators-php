<?php
  $input1 = 1;
  $input2 = 2;

  $output = $input1 + $input2;

  echo "input1: 1";
  echo "<br>";
  echo "input2: 2";
  echo "<br>";
  echo "output: $output";
  echo "<br>";
  
  var_dump($input1 != $input2);
  echo "<br>";

  $input1++;
  echo "input1 after post increment: $input1";
  echo "<br>";

  $bool1 = true;
  $bool2 = false;
  $bool3 = $bool1 || $bool2; // bool3 is bool1 or bool2
  var_dump($bool3);
  echo "<br>";

  $left_str = 'left';
  $right_str = 'right';
  $final_str = $left_str . $right_str; // Concatenate right_str to left_str to get final_str
  echo "final_str: $final_str";
  echo "<br>";

  $x = array("a" => "Red", "b" => "Green", "c" => "Blue");
  $y = array("u" => "Yellow", "v" => "Orange", "w" => "Pink");
  $z = $x + $y; // Union of $x and $y
  var_dump($z);
  echo "<br>";

  $ar1 = array("1" => "One", "2" => "Two");
  $ar2 = array("3" => "Three", "4" => "Four");
  $ar3 = $ar1 + $ar2; // $ar3 is union of $ar1 and $ar2
  var_dump($ar3);
  echo "<br>";
  

  echo $input1 <=> $input2;
?>
