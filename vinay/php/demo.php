<!doctype>
<html>
<head>
     <title>MY FIRST PHP PROGRAM</title>
</head>
<body>
<?php 

        echo "hello how are you!"."<br><br>";
          /* declaration of variables */
           $fullname="vinay panwar";
            $age="18";
   		     echo $fullname;
               echo "<br><br>";
                echo $age;
                 echo "<br><br>";
                  print('My Name is: '.$fullname.' & age :'.$age.'yrs');
                   echo "<br><br>";
                  echo 'string to calculate length:'.strlen($fullname);
                 echo "<br><br>";
                echo 'string to calculate world:'.str_word_count($fullname);
               echo "<br><br>";
              echo 'string to reverse:'.strrev($fullname)."<br><br>";
             echo 'string to replace:'.str_replace('panwar','thakur',$fullname)."<br><br>";
            $price="10.345";
           var_dump($price)."<br><br>";
          $price="5985";
         var_dump($price)."<br>";
	    echo pi();
	   echo "<br>";
	    echo(min(0, 150, 30, 20, -8, -200));
	     echo "<br>";
          echo(max(0, 150, 30, 20, -8, -200));
           echo "<br>";
            echo(abs(-6.7));
             echo "<br>";
              echo(sqrt(64));
               echo "<br>";
                echo(sqrt(0));
                 echo "<br>";
                  echo(sqrt(1));
                   echo "<br>";
                    echo(sqrt(9));
                   echo "<br>";
                  echo(rand(0,100));
			     echo "<br>";
				echo(rand(100000,100000000));
			   echo "<br>";
			  define("hello", "welcome to oxeen it!");
             echo hello;
            echo "<br>";
			/* declaration of  constant array */
           define("names", [
            "dinku",
            "shiro",
            "titu"
            ]);
         echo names[0];
        print_r(names);
		 /* declaration of operators*/
	   echo "<br>";
		$a= 10;
        $b= 20;
      echo $a+$b;
     echo "<br>";		
		$a= 10;
        $b= 20;
    echo $a-$b;
   echo "<br>";		
		$a= 10;
        $b= 20;
  echo $a*$b;	
		$x = 100;
 echo "<br>";
$y = "100";

var_dump($x == $y); // returns true because values are equal
         		
?>
</body>
</html>
 