<!--
     Random.php
     Written by:  Jo Suh
     Written on:  10-13-2019
 --> 
        
<html>
<head>
	<title>Random</title>
</head>
<body>
    <?php
        
        # Include other php files
        # The include function adds the components in the following order
        # Header --------------------------------------------------
        include "Header.php";
        # Menu --------------------------------------------------
        include "Menu.php";
    
        
        
        # Content --------------------------------------------------
        echo "<div id=\"content\"><p class=\"title\">Random Numbers</p><p>";

        /*
         A script that will solve a problem using logical and conditional statements of PHP.
         This script:
            Generates 500 numbers in the range 1-50 and assign each number to the approporiate range.
            There should be 5 ranges such that each range will contain the numbers as below:
                Range 1: any random number between 1 to 10
                Range 2: any random number between 11 to 20
                Range 3: any random number between 21 to 30
                Range 4: any random number between 31 to 40
                Range 5: any random number between 41 to 50
            Then displays the:
                total number of values within each range,
                results as a histogram od stars as a percentage of the number of values in each range
         */

        define ("MIN", 1);
        define ("MAX", 50);
        define ("NUMBER_OF_VALUES", 500);
        
        
        $eachRangeValues = array( 0, 0, 0, 0, 0 );
        # Set the array of values for each range
        $valueRanges = array();
        
        for ($i = 0; $i < 5; ++$i) {
            $valueRanges[$i] = array( $i*10+1 , ($i+1)*10 ); // each ranges
        }
        
        # Generate random number and insert a number into the correct range
        for ($i = 0; $i < NUMBER_OF_VALUES; ++$i) {
            $aRandNum = rand(MIN, MAX);
             for ($j = 0; $j < sizeof($eachRangeValues); ++$j) {
                 if ( $aRandNum >= $valueRanges[$j][0] && $aRandNum <= $valueRanges[$j][1]){
                     # if in the range
                     $eachRangeValues[$j] += 1;
                 }
             }
        }
        # print the number of values in each range
        for ($i = 0; $i < 5; ++$i) {
            echo "<emphasize>" . $eachRangeValues[$i] . "</emphasize> numbers are randomly generated in the range between ";
            echo $valueRanges[$i][0] . " - " . $valueRanges[$i][1] . "<br>";
        }
    
        echo "<br><br>";
        # print histogram
        echo "Histogram of stars as a percentage of the number of values are displayed below:<br><br>";
        for ($i = 0; $i < sizeof($eachRangeValues); ++$i) {
            # Percentage of Number = ( Randomly generated numbers *100 ) / 500
            $numberPercentage = ($eachRangeValues[$i] *100) / NUMBER_OF_VALUES ;
            echo $valueRanges[$i][0] . " - " . $valueRanges[$i][1] . ":\t";
            for ($j =0 ; $j < $numberPercentage ; $j ++){
                echo "*";
            }
            echo "<br>";
        }
        
        
        echo "<br><br><br>Percentages:<br>";
        for ($i = 0; $i < sizeof($eachRangeValues); ++$i) {
            # Percentage of Number = ( Randomly generated numbers *100 ) / 500
            $numberPercentage = ($eachRangeValues[$i] *100) / NUMBER_OF_VALUES ;
            echo $valueRanges[$i][0] . " - " . $valueRanges[$i][1] . ":\t";
            
            echo "<meter value=\"".$numberPercentage."\" min=\"0\" max=\"100\"></meter>";
            
            echo "   <note>" . $numberPercentage."%</note><br>";
            
        }
        
        
        echo "</p></div>";
        
    
        # Footer --------------------------------------------------
        include "Footer.php";
?>

</body>
</html>
