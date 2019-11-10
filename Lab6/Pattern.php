<!--
     Pattern.php
     Written by:  Jo Suh
     Written on:  10-13-2019
 --> 
        
<html>
<head>
	<title>Pattern</title>
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
        echo "<div id=\"content\"><p class=\"title\">Pattern</p>";
        # Use conditional loop (for/while/do…while) statement of PHP to draw the following pattern:
        /*
             #
            ###
           #####
          #######
         #########
        ###########
        ###########
         #########  
          #######  
           ##### 
            ### 
             #
         */
        
        
        echo "<p>";
        
        function printLine( $numOfSpaces, $numOfStars ){
            # print spaces
            for ($j = 0; $j < $numOfSpaces; ++$j) {
                echo "&nbsp;&nbsp;";
            }
            # print stars
            for ($j = 0; $j < $numOfStars; ++$j) {
                echo "#";
            }
            echo "<br>";
        }
        
        function printPattern( $maxNumOfStars ){
            $numOfStars = 1;
            $numOfSpaces = intdiv($maxNumOfStars, 2);
            # First half
            while ($numOfStars < $maxNumOfStars){
                printLine( $numOfSpaces, $numOfStars);
                $numOfSpaces--; // decrement
                $numOfStars+= 2; //increase by 2;
            }
            printLine( $numOfSpaces, $numOfStars); //middle
            # Last half
            while ($numOfStars>0){
                printLine( $numOfSpaces, $numOfStars);
                $numOfSpaces++; // increment
                $numOfStars-= 2; //decrease by 2;
            }
        }
        
       
        
        printPattern( 11 ); // $maxNumOfStars must be an odd number greater than 1
        
        echo "</p></div>";
        
        # Footer --------------------------------------------------
        include "Footer.php";
        ?>

</body>
</html>
        