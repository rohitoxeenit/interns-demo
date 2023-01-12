<!doctype>
<html>
<head>
<title>day8</title>
</head>
<body>
       <?php
         echo "demo";
          echo "<br>";
           echo "today is ".date("Y/m/d"); 
            echo "<br>";
             echo "<br>";
              echo "today is ".date("d*M*Y"); 
               echo "<br>";
                echo "<br>";
                 echo "today is ".date("Y-m-D"); 
                echo "<br>";
               echo "<br>";
              echo "today is ".date("l");
             echo "<br>";
            echo "<br>";
           echo "today is ".date("D/M/y"); 
          echo "<br>";
         echo "<br>";
        echo "today is".date("h:i:s:A");
         echo "<br>";
          echo "<br>";
           date_default_timezone_set("america/new_york");
            echo "today is".date("h:i:s:A");
             echo "<br>";
              echo "<br>";
               //date_default_timezone_set("india/");//
                //echo "today is".date("h:i:s:A");//
				 $t = date("H");
                if ($t < "20") 
               {echo "Have a good day!";}
			  echo "<br>";
             echo "<br>";
			$t = date("H");
           if ($t < "50") 
          {echo "if statement";}
         echo "<br>";
        echo "<br>";
         $h=date("h");
          if ($h  <"90")
           {echo "small"; }
            else
             {echo "big"; }
              echo "<br>";
               echo "<br>";
			    $h=date("h");
                 if ($h  >"90")
                {echo "small"; }
               else
              {echo "big"; }
             echo "<br>";
            echo "<br>";
		   $t = date("H");
          if ($t < "10") {
         echo "A for apple";
        } elseif ($t > "90") {
         echo "B for ball";
          } else {
           echo "C for cat";
            }
             echo "<br>";
              echo "<br>";
               $t = date("H");	
                if ($t >"10") {
                 echo "A for apple";
                } elseif ($t < "90") {
               echo "B for ball";
              } else {
             echo "C for cat";
            }
           echo "<br>";
          echo "<br>";
         $t = date("H");
        if ($t <"10") {
         echo "A for apple";
          } elseif ($t < "20") {
           echo "B for ball";
            } else {
             echo "C for cat";
              }
               echo "<br>";
                echo "<br>";
	             $t = date("H");
                if ($t >"10") {
               echo "A for apple";
              } elseif ($t > "90") {
             echo "B for ball";
            } else {
           echo "C for cat";
          }
		  echo "<br>";
           echo "<br>";
		  echo "<hi>class & object</h1>";
		  echo "<br>";
           echo "<br>";
		  
?>
</body

</html>
