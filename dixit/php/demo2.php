<!doctype>
<html>
     <body>
      <h1>day-2 of php</h1>
	  <?php
	  $x =10;
	  $y =6;
	  echo $x + $y . "<br><br>";
	
	  
	  
	   echo "today" .date("d/m/y"). "<br>";
	   echo "today" .date("d*m*y") . "<br>";
	   echo "today" .date("D.M.Y") . "<br>";
	   echo "today" .date("d-m-y") . "<br>";
	   echo "Today is " . date("l") . "<br><br>";
	   
	   
	   $t = date ("10");
	   
	   if ($t < "20") {
	   echo "have a good day!";
	   } else {
	   echo "have a good night!";
	   }  
	    echo "<br><br>";
	   
	    $t = date ("30");
	   
	   if ($t < "20") {
	   echo "have a good day!";
	   } else {
	   echo "have a good night!";
	   }
	     echo "<br><br>";
		 
		 $t = date("15");
		 echo "<p>The hour (of the server) is " . $t; 
         echo ", and will give the following message:</p>";
          
		  if ($t < "10") {
		 echo "hello sir!";
		 } elseif ($t < "20") {
		 echo "hye sir!";
         } else	{
         echo "bye sir!";
         }		 
	      echo "<br><br>";
		  
		  echo(rand(10, 1000));
		  
		  echo"<br><br>";
		  echo(round(0.60) . "<br>");
         echo(round(5.40) . "<br>");
         echo(round(0.49) . "<br>");
         echo(round(-4.49) . "<br>");
         echo(round(-48.50));
	   
	   
	   
	  ?>
	  
     </body>
</html>	 