<!--
     Menu.php
     Written by:  Jo Suh
     Written on:  11-09-2019
     This is the php file to create a Menu for the homepage
 --> 
 <?php
    
    # Define each webpage
     $EACH_WEBPAGE_LIST = array();
     # Assignments
     $EACH_WEBPAGE_LIST['Assignments'] = array();
     $EACH_WEBPAGE_LIST['Assignments']['Assignment 1'] = 'Assignment1/index.html';
     $EACH_WEBPAGE_LIST['Assignments']['Assignment 2'] = 'Assignment2/BookRepCRM.php';
     # Labs
     $EACH_WEBPAGE_LIST['Labs'] = array();
     $EACH_WEBPAGE_LIST['Labs']['Lab 1'] = 'Lab1/index.html';
     $EACH_WEBPAGE_LIST['Labs']['Lab 2'] = 'Lab2/index.html';
     $EACH_WEBPAGE_LIST['Labs']['Lab 3'] = 'Lab3/index.html';
     $EACH_WEBPAGE_LIST['Labs']['Lab 4'] = 'Lab4/index.html';
     $EACH_WEBPAGE_LIST['Labs']['Lab 5'] = 'Lab5/Index.php';
     $EACH_WEBPAGE_LIST['Labs']['Lab 6'] = 'Lab6/Random.php';
     $EACH_WEBPAGE_LIST['Labs']['Lab 7'] = 'Lab7/Arrays.php';
     $EACH_WEBPAGE_LIST['Labs']['Lab 8'] = 'Lab8/Input.php';
     
     
     
     # define web addresses as PHP constants
     define ('PATH', 'http://suh00010.com/CST8238/');
    
     define ('LIST_CALLED', '<li><div class="dropdown"><button class="dropbtn">');
     define ('LIST_START', '</button><div class="dropdown-content">');
     define ('EACH_PATH', '<a href="'.PATH );
     define ('EACH_NAME', '">' );
     define ('EACH_END', '</a>' );

     
     # Menu --------------------------------------------------
     # Lab dropdown links
     echo '<div id="menu"><ul>';
     foreach ($EACH_WEBPAGE_LIST as $listName => $eachList){
         echo LIST_CALLED . $listName . LIST_START;
         foreach ($eachList as $pageName => $eachPage){
             echo EACH_PATH . $eachPage . EACH_NAME . $pageName . EACH_END;
         }
         echo '</div></div></li>';
     }
     echo '</ul></div>';
 
 ?>