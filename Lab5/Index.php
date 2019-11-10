<!--
    Index.php
     Written by:   Jo Suh
     Written on:  10-09-2019
 --> 
        
<html>
<head>
	<title>Lab 5</title>
	<link rel="stylesheet" type="text/css" href="http://suh00010.com/CST8238/Lab5/StyleSheet.css" />
	<link href='https://fonts.googleapis.com/css?family=Amatic SC' rel='stylesheet'>
</head>
<body>
    <?php
        
        # Include other php files
        # The include function adds the components in the following order
        include "Header.php";
        include "Menu.php";
    
        
        
        # Content --------------------------------------------------
        echo "<div id=\"content\">";
        echo "<p class=\"title\"> Welcome to lab 5</p>";
        
        # PHP variables
        $firstName = "Jo";
        # $middleName = "";
        $lastName = "Suh";
        
        echo "<p>";
        echo "My name is : $firstName $lastName<br>";
        echo "I don't have a middle name";
        echo "<br></p>";
        
        
        # PHP constants
        define("STUDENT_NUM", "040943462");
        # Strings can be passed individually as multiple arguments (,)
        echo "<p>";
        echo "Student #: ", STUDENT_NUM;
        echo "<br></p>";
        
        
        # texts to concatenate
        $text1 = "Hello World!!";
        $text2 = "This is the first time I am using PHP!!";
        
        # Strings can be concatenated together and passed as a single argument (.)
        
        echo "<p><strong>";
        echo $text1 . " " . $text2 ;
        echo "</strong></p><br><br><br><br><br>";
        echo "</div>";
        
        
        include "Footer.php";
        
        
    ?>

</body>
</html>

