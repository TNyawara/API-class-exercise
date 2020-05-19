<?php
#square bracket notation
 $my_students = ["Marvin", 110785,"Nicholas","Wisdom"];
 #print_r($my_students);

 #using the array()
 $my_students = array(104414,"Saruni");

#var_dump($my_students);
echo "<br>";
echo "<br>";

#associative array
 $student_list = [
   113641 => "Ian",
   110486 => 'Wachira',
   111649 => 'Oyaro',

 ];

 #print_r($student_list);

#Accessing - indexes (integers-automatically defined(varied typed))
 //echo $student_list[113641];
  //echo $my_students[1];

#unset($my_students[1]);
#var_dump($my_students);

#unset($student_list[111649]);
#var_dump($student_list);

$array1 =[];
$array2 =['one'];

var_dump(isset($student_list[111649]));
echo "<br>";
var_dump(isset($array2));

#one-d,n-d
/*
 1.index-1 Don
 2.index-2 Mark
 3.index-3 Joan
*/

 $student_list_kcse =[
   [1, 'index-1','Don'],
   [2, 'index-2', 'Mark'],
   [3, 'index-3', 'Joan'],
 ];

 $d_3 =[
   ["Stephen",[1,4]],
   ["Thiarara",[1,5]],
 ];

echo $student_list_kcse[2][2];
echo $student_list_kcse[1][2];

echo $d_3[1][1][1];
