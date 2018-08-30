<html>
<head><link rel ="stylesheet" type="text/css" href="sample.css"></head>
<body>
  <form action= "ArrayDemo.php" method= "Post">
    <input type="text" value="Rows" name="Rows"/>
    <input type="text" value="Collumns"  name="Collumns";/>
    <input type="text" value="Max"  name="Max";/>
    <input type="text"  value="Min" name="Min";/>
    <input type="submit" value="Submit";/>
    <input type="reset" value="Reset";/>
</form>

<?php $Rows=$_POST["Rows"];
$Colls=$_POST["Collumns"];
$Min=$_POST["Min"];
$Max=$_POST["Max"];

$arrayOfArrays=array();
echo "<table>";
for ($i= 0; $i<$Rows; $i++){
  echo "<tr>";
  $array=array();
  for ($j= 0; $j<$Colls; $j++){
    $array[$j]=rand($Min,$Max);
    echo "<td>", $array[$j] ,"</td>";
  }
  echo "</tr>";
  $arrayOfArrays[$i]=$array;
}

echo "</table>";

echo "<table>";
echo "<th> Row </th>";
echo "<th>Sum</th>";
echo "<th>Avg</th>";
echo "<th>Std Dev</th>";


for ($i= 0; $i<$Rows; $i++){
  $array=$arrayOfArrays[$i];
  echo "<tr>";
  echo"<td>",$i,"</td>";
  $sum=0;$sum2=0;
  for ($j= 0; $j<$Colls; $j++){
    $sum+=$array[$j];

  }
  echo"<td>",($sum),"</td>";
  $avg=$sum/$Colls;
  echo"<td>", number_format($avg,2) ,"</td>";

  for ($n=0; $n< sizeof($array);$n++){
    $sum2+=(($array[$n]-$avg)**(2));
  }
  $stdDev= sqrt($sum2/$Colls);
  echo"<td>", number_format($stdDev,2) ,"</td>";
  echo "</tr>";
}


echo "</table>";

?>


</body>
</html>
