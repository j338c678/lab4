
<?php
echo "<table>";
  for($i=0;$i<=100;$i++)
  {
      echo "<tr>";
        if($i!=0)
        {
          echo "<td>$i</td>";
        }
        else
        {
          echo "<td></td>";
        }
        for($j=1;$j<=100;$j++)
        {
          if($i==0)
          {
            echo "<td>$j</td>";
          }
          else
          {
            echo "<td>".($j*$i)."</td>";
          }
        }
      echo "</tr>";
    }
echo "</table>";
?>
