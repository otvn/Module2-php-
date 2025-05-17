<?php
$score=0;
echo "Welcome to quiz app\n";
echo "1.What is the largest planet in our solar system?\n";
echo "a)Earth\n";
echo "b)Jupiter\n";
echo "c)Mars\n";
echo "Enter Correct answer: ";
$answer1=trim(fgets(STDIN));
if($answer1=="b"){
  echo "Correct answer\n"; 
  $score++; 
}
else{
    echo"Wrong answer\n";
}

echo "2.Who invented the telephone?\n";
echo "a) Alexander Graham Bell\n";
echo "b) Nikola Tesla\n";
echo "c)Thomas Edison\n";
echo "Enter Correct answer: ";
$answer2=trim(fgets(STDIN));
if($answer2 == "a"){
  echo "Correct answer\n"; 
  $score++; 
}
else{
    echo"Wrong answer\n";
}
echo "3.What is the smallest country in the world by land area?\n";
echo "a) Monaco\n";
echo "b) Vatican City\n";
echo "c)San Marino\n";
echo "Enter Correct answer: ";
$answer3=trim(fgets(STDIN));
if($answer3=="b\n"){
  echo "Correct answer\n"; 
  $score++; 
}
else{
    echo"Wrong answer\n";
}
echo " you got $score out of 3 ";
?>