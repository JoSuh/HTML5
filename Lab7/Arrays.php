<!--
     Arrays.php
     Written by:  Jo Suh
     Written on:  10-26-2019
     This is the php file to create the Arrays webpage that shows the various arrays in PHP
 --> 
<html>
<head>
	<html lang="en">
	<title>Arrays</title>
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
     echo "<p class=\"title\" style=\"color:red\">Arrays</p>";
     echo "<p>This page shows various ways to create arrays in PHP!</p>";
     
     #-------------------------------------------
     function printForEach($array){
         # prints the elements inside an array using foreach
         $keys = array_keys($array);
         
         foreach ($keys as $eachKey){
             if ( gettype($array[$eachKey]) == "array" ){
                 # if element is an array, recursion
                 echo "<tr><td><p><arrayName>Array of index <emphasize>" . $eachKey . "</emphasize>:</arrayName></p></td><tr>";
                 printForEach( $array[$eachKey] );
             }else{
                 echo "<tr>";
                 echo "<td>key:</td><td>". $eachKey . "</td>";
                 echo "<td>value:</td><td>". $array[$eachKey] . "</td>";
                 echo "<td>key data type:</td><td>". gettype($eachKey) . "</td>";
                 echo "</tr>";
             }
         }
     }
     #-------------------------------------------
     function printArray($array){
         # prints the elements inside an array using var_dump and printForEach
         echo "<p><note>Output using var_dump</note></p>";
         echo "<p>".var_dump($array) . "</p>"; //Display the keys and the corresponding values of the array
         echo "<br><p><note>Output using foreach loop</note></p>";
         echo "<table class=\"result\" ><tbody>";
         printForEach($array);
         echo "</tbody></table>";
         echo "<br><br>";
     }
     #-------------------------------------------
     
     
     echo "<p class=\"title\">1. No Key Array</p>";
     $noKeyArray = array("mi", "ra", "cul", "ous");
     printArray($noKeyArray);
     
     
     
     echo "<p class=\"title\">2. String Key Array</p>";
     $stringKeyArray = array( "sim" => "ply", "the" => "best", );
     # $stringKeyArray["sim"] = "ply";
     printArray($stringKeyArray);
     
     
     
     echo "<p class=\"title\">3. Int Key Array</p>";
     $intKeyArray = array( 0=> "lala", 1=> "haha");
     printArray($intKeyArray);
     
     
     
     echo "<p class=\"title\">4. Mixed Key Array</p>";
     $mixedKeyArray = array( "sing" => 1, 90=> "2,3,4!");
     printArray($mixedKeyArray);
     
     
     
     echo "<p class=\"title\">5. Multi-dimensional Key Array</p>";
     $multiDimensionArray = array( 1=>array(1,2), 2=>array(3, 4) );
     printArray($multiDimensionArray);
     
     
     
     echo "</p></div>";
     
     # Footer --------------------------------------------------
     include "Footer.php";
     ?>
     
</body>
</html>