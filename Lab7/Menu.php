<!--
     Menu.php
     Written by:  Jo Suh
     Written on:  10-26-2019
     This is the php file to create a Menu
 --> 
 <?php
 
 # Menu.php must  must contain a script to display a Common Menu to be shown on every page
    # The menu must contain links to Arrays.php, Calculator.php and ArrayofObjects.php
 
    # define web addresses as PHP constants
     define ("SITE", "http://suh00010.com");
     define ("PATH", "/CST8238/Lab7/");
     
     
     define ("MENU_START", "<div id=\"menu\"><ul>");
     define ("MENU_END", "</ul></div>");
     
     # need to writ the following in order
     define ("FIRST_FILE_NAME", "<li><a href=\"" . SITE . PATH );
     define ("SECOND_TAGGED", ".php\" title=\"Go to ");
     define ("THIRD_IS_ACTIVE", "\" class=\"current");
     define ("FOURTH_DISPLAY_NAME", "\" >");
     define ("FIFTH_LINK_END", "</a></li>");
     
     
     $currentPage = $_SERVER['REQUEST_URI']; //define the current webpage as a variable
     
     $PHP_WEB_PAGES = array( "Arrays", "Calculator", "ArrayOfObjects"  ); //The name of each php file webpages
     $PAGE_NAMES = array( "Arrays", "Calculator", "Array of Objects"  ); //The name that will appear in the menu
     
     
     # Menu --------------------------------------------------
     echo MENU_START;
     
     for ($i = 0; $i < sizeof($PHP_WEB_PAGES); ++$i) {
         $currentPHP = $PHP_WEB_PAGES[$i];
         echo FIRST_FILE_NAME . $currentPHP . SECOND_TAGGED . $currentPHP;
         if ($currentPage == PATH.$currentPHP.".php"){
             echo THIRD_IS_ACTIVE; //current web page
         }
         echo FOURTH_DISPLAY_NAME . $PAGE_NAMES[$i]. FIFTH_LINK_END;
     }
     
     echo MENU_END;
 
 ?>