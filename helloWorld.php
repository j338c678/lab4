<?php
//Inside myfirstprogram.php
function table()
 {
	for( $i=1; $i<=20; $i++)
	{
		for( $j=1; $j<=20; $j++)
		{
      //if($i<10)
        if( $i*$j>9)
        {
			    echo  $i*$j.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        }
        else if( $i*$j>99)
        {
          echo  $i*$j.'&nbsp;&nbsp;';
        }
        else
        {
          echo  $i*$j.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        }
     }

	echo '<br>';
	}
}

echo table();
//echo "5 + 10 = <b>" . sum(5, 10) . "</b><br>";
?>
