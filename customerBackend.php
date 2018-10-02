<style>
  <?php include('style.css');?>
</style>
<?php
$UserName=$_POST['UserName'];
$password=$_POST['Password'];
$item1=$_POST['item1'];
$item2=$_POST['item2'];
$item3=$_POST['item3'];
$ship=$_POST['ship'];

$ship1=0;
$ship2=50;
$ship3=5;


$item1total=$item1*50;
$item2total=$item2*80;
$item3total=$item3*100;

$total1=$item1*50+$item2*80+$item3*100;
$total2=$item1*50+$item2*80+$item3*100+50;
$total3=$item1*50+$item2*80+$item3*100+5;


echo "<body>";

echo "Welcome to the receipt<br>";
echo "You UserName is ".$UserName."<br>";
echo "You password is ".$password."<br><br>";

echo "<table>";
echo "<tr>";
echo "<th></th>";
  echo "<th>"."Quantity"."</th>";
  echo "<th>"."Cost Per Item"."</th>";
  echo "<th>"."Sub Total"."</th>";
echo "</tr>";

echo "<tr>";
  echo "<td>"."Item1"."</td>";
  echo "<td>".$item1."</td>";
  echo "<td>"."50.00$"."</td>";
  echo "<td>".$item1total."$"."</td>";
echo "</tr>";

echo "<tr>";
  echo "<td>"."Item2"."</td>";
  echo "<td>".$item2."</td>";
  echo "<td>"."80.00$"."</td>";
  echo "<td>".$item2total."$"."</td>";
echo "</tr>";


echo "<tr>";
  echo "<td>"."Item3"."</td>";
  echo "<td>".$item3."</td>";
  echo "<td>"."100.00$"."</td>";
  echo "<td>".$item3total."$"."</td>";
echo "</tr>";


echo "<tr>";
  echo "<td>"."Shipping"."</td>";
  echo "<td colspan=2>".$ship."</td>";

  if($ship=="Free 7 day")
  {
    echo "<td>".$ship1."$"."</td>";
  }
  if($ship=="50.00 over night")
  {
    echo "<td>".$ship2."$"."</td>";
  }
  if($ship=="$5.00 three day")
  {
    echo "<td>".$ship3."$"."</td>";
  }
echo "</tr>";

echo "<tr>";
  echo "<td>"."Total"."</td>";

  if($ship=="Free 7 day")
  {
    echo "<td colspan= 3>".$total1."$"."</td>";
  }
  if($ship=="50.00 over night")
  {
    echo "<td colspan= 3>".$total2."$"."</td>";
  }
  if($ship=="$5.00 three day")
  {
    echo "<td colspan= 3>".$total3."$"."</td>";
  }


echo "</tr>";




echo "</table>";


echo"</body>";
?>
