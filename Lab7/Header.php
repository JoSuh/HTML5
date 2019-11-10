<!--
     Header.php
     Written by:  Jo Suh
     Written on:  10-26-2019
     This is the php file to create a Header
 --> 
 <?php
 
    # Header.php must contain a script to display a Common Header that will appear on every page.
    # The header must contain a banner (images, css, etc).
    define ("STYLESHEET_PATH", "http://suh00010.com/CST8238/Lab7/Stylesheet.css");
    define("FONT_START", "<link href=\"https://fonts.googleapis.com/css?family=");
    define("FONT_END", "&display=swap\" rel=\"stylesheet\">");
    
    # Header --------------------------------------------------
     echo "<div id=\"header\"><p>";
     # CSS stylesheet
     echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . STYLESHEET_PATH . "\" />";
     # fonts
     echo FONT_START . "Staatliches|Amatic SC|Merriweather|Lobster" . FONT_END; // Can't have space in between the fonts
     
     echo "</p></div>";
     
     echo "<div id=\"headermask\"></div>"; //header mask - dots

 
 ?>