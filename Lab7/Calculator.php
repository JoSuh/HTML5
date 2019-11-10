<!--
     Calculator.php
     Written by:  Jo Suh
     Written on:  10-26-2019
     This is the php file to create the Calculator webpage,
        a calculator that will perfrom Addition, Subtraction, Multiplication, Division, and Exponentiation.
     This calculator needs to determine whether the calculated result is an even or an odd number,
        and whether the calculated result is a prime number or not.
 --> 
<html>
<head>
	<html lang="en">
	<title>Calculator</title>
</head>
<body>
	<?php
        
         # Include other php files (adds the components in the following order:)
         # Header --------------------------------------------------
         include "Header.php";
         # Menu --------------------------------------------------
         include "Menu.php";
         
         
         # Content --------------------------------------------------
         echo "<div id=\"content\">";
         echo "<p class=\"title\">Calculator</p>"; //put title in as php so can match style as other pages
         echo "<p>Enter numbers to calculate!</p>";
         
         ?>
   	        <!-- html text from now so it's easier to see -->
     		<form class="inputField" action="Calculator.php" method="POST" >
     			<table>
     				<tr>
     					<td><input type="number" name="val1" placeholder="Value 1" step=".0001" ></td>
     					<td>
     						<select class="operations" name="operation">
                            	<option value="+">+</option>
                            	<option value="-">-</option>
                            	<option value="*">&times;</option>
                            	<option value="/">&divide;</option>
                            	<option value="^">^</option>
                    		</select>
                		</td>
     					<td><input type="number" name="val2" placeholder="Value 2" step=".0001" ></td>
     				</tr>
            	</table>
 				<input type="submit" name="calculateButton" value= "=" >
            
        <?php
            # ---------------------------------------------------------------------
            function operation( $num1, $operation, $num2 ){
                # Function to perform operation on 2 values
                # array( "+", "-", "&times;", "&divide;", "^" );
                switch ($operation) {
                    case "+":
                        # Addition
                        return $num1 + $num2;
                        break;
                    case "-":
                        # Subtraction
                        return $num1 - $num2;
                        break;
                    case "*":
                        # Multiplication
                        return $num1 * $num2;
                        break;
                    case "/":
                        # Division
                        if ($num2==0){
                            # error
                            return "error";
                            break;
                        }
                        return $num1 / $num2;
                        break;
                    case "^":
                        # Exponential
                        return pow($num1, $num2);
                        break;
                    default:
                        # error
                        return "error";
                        break;
                }
            }
            # ---------------------------------------------------------------------
            function isPrime( $num ){
            # Function to check if a number is a prime, then returns the string value
            $returnStatement = "a prime number";
                if (floor( $num ) != $num){
                    # decimal
                    return "not " . $returnStatement;
                }
                if ( $num == 1 ){
                    # 1 is disregarded
                return $returnStatement;
            }
            for ($i = 2; $i < $num; ++$i) {
                # Check if the number is a prime number of not
                # Not including 1 or the number itself
                $countNumOfDiv = 0;
                if ( ($num % $i)==0 ){
                    # dividable by a number (for primes: 1 and itself)
                    $countNumOfDiv++;
                    
                    if ($countNumOfDiv > 0){
                        # is divisable by a number --> not a prime
                        return "not " . $returnStatement;
                    }
                }
            }
            # if make it to here, have checked everything and the number is a prime
            return $returnStatement;
            }
            # ---------------------------------------------------------------------
            function isEven( $num ){
                # Function to check if a number is even or odd, then returns the string
                if ( floor( $num ) != $num || ($num % 2)!=0 ){
                    # a decimal or not dividable by 2: odd
                    return "odd";
                }else{
                    return "even";
                }
            }
            # ---------------------------------------------------------------------
            
    		if($_POST["calculateButton"]){ //check if form was submitted
    		    $val1 =  $_POST["val1"];
    		    $val2 =  $_POST["val2"];
    		    $operation = $_POST["operation"];
    		    
    		    $result= operation( $val1, $operation, $val2 );
    		    
    		    # check if any error have occured
    		    if ( $val1=="" || $val2=="" || !is_numeric($result) ){
    		        # error
    		        echo "<p>Error: Invalid input</p>";
    		    }else{
    		        # correct result
    		        if ($operation == "*"){
    		            $operation = "&times;";
    		        } else if ($operation == "/"){
    		            $operation = "&divide;";
    		        }
    		        echo "<p>";
    		        echo $val1 . $operation . $val2 . "= <emphasize style=\"text-decoration: underline;\">" . $result . "</emphasize><br><br>";
    		        echo $result . "  is <emphasize>" . isPrime($result) . "</emphasize><br>"; //check if prime number
    		        echo $result . "  is an <emphasize>" . isEven($result) . "</emphasize> number";
    		       
    		        echo "<br></p>";
    		    }
        	}
        echo "</form></div>";
	
         
         # Footer --------------------------------------------------
         include "Footer.php";
         ?>
         
</body>
</html>