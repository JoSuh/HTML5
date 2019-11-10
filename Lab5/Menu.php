  
<!DOCTYPE html>
<html>
<body>

<?php
    /*
    Menu.php
    Written by:   Jo Suh
    Written on:  10-09-2019
     */

    # Menu.php must contain a script to display a Menu
    # The menu must contain links to Lab 1, Lab 2, Lab 3 and Lab 4
    
    # define web addresses as PHP constants
    define ("LAB_1", "http://suh00010.com/CST8238/Lab1/index.html");
    define ("LAB_2", "http://suh00010.com/CST8238/Lab2/index.html");
    define ("LAB_3", "http://suh00010.com/CST8238/Lab3/index.html");
    define ("LAB_4", "http://suh00010.com/CST8238/Lab4/index.html");
    define ("ASSIGN_1", "http://suh00010.com/CST8238/Assignment1/index.html");
    
    define ("INDEX", "http://suh00010.com/CST8238/Lab5/index.php");
    
    
    # Menu --------------------------------------------------
    echo "<div id=\"menu\">";
    echo "<ul>";
    echo "<li><a href=\"";
    echo ASSIGN_1;
    echo "\" title=\"Assignment 1\">Assignment 1</a></li>";
    
    echo "<li><a href=\"";
    echo LAB_4;
    echo "\" title=\"Lab 4\">Lab 4</a></li>";
    
    echo "<li><a href=\"";
    echo LAB_3;
    echo "\" title=\"Lab 3\">Lab 3</a></li>";
    
    echo "<li><a href=\"";
    echo LAB_2;
    echo "\" title=\"Lab 2\">Lab 2</a></li>";
    
    echo "<li><a href=\"";
    echo LAB_1;
    echo "\" title=\"Lab 1\">Lab 1</a></li>";
    
    echo "<li><a href=\"";
    echo INDEX;
    echo "\"  class=\"active\" title=\"index.php\">Home</a></li>";
    
    echo "</ul>";
    echo "</div>";

?>

</body>
</html>

