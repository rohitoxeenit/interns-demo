    <?php  
    $count = 0;  
    $num = 2;  
    while ($count < 15 )  
    {  
		$div_count=0;  
		for ( $i=1; $i<=$num; $i++)  
		{  
			if (($num%$i)==0)  
			{  
			$div_count++;  
			}  
		}  
		
		if ($div_count<3)  
		{  
			echo $num." , ";  
			$count=$count+1;  
		}  
			$num=$num+1;  
	}  
    ?>  
	
	<?php 
	
		$sub1=55;
		$sub2=65;
		$sub3=75;
		$sub4=85;
		$sub5=45;
		$total = $sub1+$sub2+$sub3+$sub4+$sub5;
		echo $total;
		echo "<br/>";
		$perc = $total/5;
		if($perc > 80){
			echo 'A-postion';
		} else if(($perc >= 60) && ($perc <= 80)){
			echo 'B-postion';
		} else if(($perc >= 40) && ($perc < 60)){
			echo 'C-postion';
		} else {
			echo 'Ok tata bye bye FAIL!';
		}
	?>