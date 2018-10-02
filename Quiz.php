<?php
$Question1 =$_POST['city1'];
$Question2 =$_POST['city2'];
$Question3 =$_POST['city3'];
$Question4 =$_POST['city4'];
$Question5 =$_POST['city5'];
$point=0;
$total=0;

echo "Question1: The capital of China is?<br>";
echo "You answered: ".$Question1."<br>";
echo "Correct answer: BeiJing<br><br>";
if($Question1 == "BeiJing")
{
  $point=$point+20;
  $total=$total+1;
}

echo "Question2: The capital of US is?<br>";
echo "You answered: ".$Question2."<br>";
echo "Correct answer: Washington, D.C<br><br>";
if($Question2 == "Washington, D.C")
{
  $point=$point+20;
  $total=$total+1;
}

echo "Question3: The capital of Japan is?<br>";
echo "You answered: ".$Question3."<br>";
echo "Correct answer: Tokyo<br><br>";
if($Question3 == "Tokyo")
{
  $point=$point+20;
  $total=$total+1;
}

echo "Question4: The capital of Mexico is?<br>";
echo "You answered: ".$Question4."<br>";
echo "Correct answer: Mexico City<br><br>";
if($Question4 == "Mexico City")
{
  $point=$point+20;
  $total=$total+1;
}

echo "Question5: The capital of Korea is?<br>";
echo "You answered: ".$Question5."<br>";
echo "Correct answer: Seoul<br><br>";
if($Question5== "Seoul")
{
  $point=$point+20;
  $total=$total+1;
}

echo "You got ".$total." correct anwsers<br>";
echo "You score is %".$point."<br>";

?>
