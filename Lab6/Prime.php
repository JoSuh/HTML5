<!--
     Prime.php
     Written by:  Jo Suh
     Written on:  10-13-2019
 --> 
        
<html>
<head>
	<title>Prime</title>
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
        echo "<p class=\"title\">Prime Numbers</p>";

        /*
          a script that will generate all prime numbers in between a range accepted from the user prompt.
        For example, if Range 1= 50 and Range 2=100, you have to display all the prime numbers in
        between 50 and 100 by clicking ‘Generate’ button
        */
       ?> 
        <!-- html text from now  -->
        <form class="inputField" action="Prime.php" method="POST" >
        	<label>Range 1: </label><input type='number' name='range1' value="0" >
        	<label>Range 2: </label><input type='number' name='range2' value="0" >
        		<input type="submit" name="generateButton" value= "Generate" >
        	
        		<?php 
                    # Get primes
                    # Prime Number: a whole number that cannot be made by multiplying other whole numbers
            		# Function to check if a number is a prime
            		function isPrime( $eachNum ){
            		    if ( $eachNum == 1 ){
            		        # 1 is disregarded
            		        return true;
            		    }
            		    for ($i = 2; $i < $eachNum; ++$i) {
            		        # Check if the number is a prime number of not
            		        # Not including 1 or the number itself
            		        $countNumOfDiv = 0;
            		        if ( ($eachNum % $i)==0 ){
            		            # dividable by a number (for primes: 1 and itself)
            		            $countNumOfDiv++;
            		            
            		            if ($countNumOfDiv > 0){
            		                # is divisable by a number --> not a prime
            		                return false;
            		            }
            		        }
            		    }
            		    # if make it to here, have checked everything and the number is a prime
            		    return true;
            		}
        		
            		if($_POST["generateButton"]){ //check if form was submitted
            		    $range1=  $_POST["range1"];
            		    $range2=  $_POST["range2"];
            		    $eachNum= $range1;
            		    
            		    # Check for correct user input
            		    if ( empty($range1) || empty($range2) || $range2 <= $range1 ) {
            		        echo "<p>Error: Invalid input</p>";
            		    }else{
                		    echo "<p>Results:<br>";
            
                		    while ($eachNum <= $range2 ){
                		        if ( isPrime($eachNum) ){
                		            # if have checked everything, is a prime number
                		            echo "<emphasize>" . $eachNum . "</emphasize> is a prime number<br>";
                		        }
                		        $eachNum++;
                		    }
                		    echo "<br></p>";
            		    }
                	}
        		?>
        </form>
	</div>
        
    <?php
        # Footer --------------------------------------------------
        include "Footer.php";
    ?>

</body>
</html>