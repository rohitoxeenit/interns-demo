<!DOCTYPE html>
<html>
<body>

<?php
     echo "My first PHP script!"."<br>";
      echo"hi my name is himanshu"."<br>";
       echo"printing "."<br>";
        $name="my name is himanshu thakur";
         $age="19";
          echo $age;
           echo $name;
            print('My Name is: '.$name.' & age :'.$age.'yrs');
             print("<br>");
            echo 'String length calculate: '.strlen($name)."<br>";
           echo'String length calculate:'.str_word_count($name)."<br>";
          echo strrev($name)."<br>";
         echo strpos($name,'himanshu')."<br>";
       echo str_replace('name','self',$name)."<br>";
      $price=95.000;
     echo number_format($price,1)."<br>";
      $price=6666;
       echo var_dump($price);
        $name="wowz  digital limited oxeen unit";
         $age="5";
          echo $age;
           echo $name;
            print('My Name is: '.$name.' & age :'.$age.'yrs');
             print("<br>");
            echo 'String length calculate: '.strlen($name)."<br>";
           echo'String length calculate:'.str_word_count($name)."<br>";
          echo strrev($name)."<br>";
         echo strpos($name,'oxeen')."<br>";
        echo str_replace('wowz','wows',$name)."<br>";
       echo  pi()."<br>";
      echo(min(500,350,-244,-250,400))."<br>";
     echo(max(500,350,-244,-250,400))."<br>";
      echo(abs(-6.7))."<br>";
       echo(sqrt(64))."<br>";
        echo(sqrt(16))."<br>";
         echo(round(99.7))."<br>";
          echo(round(.7))."<br>";
           echo(round(.4))."<br>";
            echo(rand())."<br>";
             echo(rand(10,100))."<br>";
			echo define("page","php.com")."<br>";
		   echo page;
		  echo define("DOGS",["tom","BINI","tommy"])."<br>";
		 echo DOGS[1]."<br>";
		echo"PHP Arithmetic Operators"."<br>";
       $a= 10;
	  $b= 7;
	 echo $a+$b."<br>";
	  $a= 10;
	   $b= 7;
	    echo $a-$b."<br>";
	     $a= 10;
	      $b= 7;
	       echo $a*$b."<br>";
	        $a= 10;
	         $b= 7;
	        echo $a/$b."<br>";
	       $a= 10;
	      $b= 7;
	     echo $a%$b."<br>";
	    echo "PHP Assignment Operators"."<br>";
	   $x = 10;  
      echo $x."<br>";
     $x = 20;  
      $x += 100;
       echo $x."<br>";
        $x = 20;  
         $x -= 100;
          echo $x."<br>";
           $x = 20;  
            $x *= 100;
             echo $x."<br>";
            $x = 20;  
           $x /= 100;
          echo $x."<br>";
         $x = 20;  
        $x %= 100;
       echo $x."<br>";
?>
</body>
</html>
