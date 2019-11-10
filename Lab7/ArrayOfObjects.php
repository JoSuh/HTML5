<!--
     ArrayOfObjects.php
     Written by:  Jo Suh
     Written on:  10-26-2019
     This is the php file to create the ArrayOfObjects webpage
 --> 
<html>
<head>
	<html lang="en">
	<title>Array Of Objects</title>
</head>
<body>
	<?php
    require "Employee.php";
    require "Supervisor.php";
	# ArrayOfObjects.php deals withObjects in php
     # Include other php files (adds the components in the following order:)
     # Header --------------------------------------------------
     include "Header.php";
     # Menu --------------------------------------------------
     include "Menu.php";
     
     # Content --------------------------------------------------
     echo "<div id=\"content\">";
     echo "<p class=\"title\">Array of Objects</p>";
     echo "<p>This page deals with objects in PHP!</p>";
     echo "<br><br>";
     
     # ------------------------------------------------------------------------------------------
     
     function getEmployeeData (Employee $person, $supervisorName){
         # prints the data of an Employee
         echo "<tr>";
         echo "<td>Employee Id: </td><td>". $person->getEmployeeId() . "</td>";
         echo "<td>Name: </td><td>". $person->getFirstName(). " " . $person->getLastName() . "</td>";
         echo "<td>Supervisor: </td><td>". $supervisorName . "</td>";
         echo "</tr>";
     }
     # ------------------------------------
     function displaySupervisorData (Supervisor $supervisor){
         # prints the data of all the employees associated with a supervisor
         $supervisorName = $supervisor->getFirstName(). " " . $supervisor->getLastName();
         echo "<p><note>Employees associated with supervisor   <emphasize>". $supervisorName . "</emphasize></note></p><br>";
         
         echo "<table class=\"result\" ><tbody>";
         $employees = $supervisor->getEmployees();
         foreach ( $employees as $eachEmployee ){
             # print details for each employee
             echo getEmployeeData( $eachEmployee, $supervisorName );
         }
         echo "</tbody></table>";
         echo "<br><br>";
     }
     # ------------------------------------
     
     # Create object instances and arrays to test out the code
     $employee1 = new Employee( 1, "John", "Doe" );
     $employee2 = new Employee( 2, "Marinette", "DuPain" );
     $employee3 = new Employee( 3, "Adrian", "Agriste" );
     $employee4 = new Employee( 4, "Tikki", "Spotson" );
     $employee5 = new Employee( 5, "Plag", "Clawsout" );
     $employee6 = new Employee( 6, "Hawk", "Moth" );
     
     $employees1 = array( $employee1, $employee2, $employee3 );
     $employees2 = array( $employee4, $employee5, $employee6 );
     
     $supervisor1 = new Supervisor( 7, "Lady", "Bug", array( $employee1, $employee2, $employee3 ) );
     $supervisor2 = new Supervisor( 8, "Chat", "Noir", $employees2, );
     
     
     # Display the employee ID, first and last name of the employees supervised by each of the Supervisors
     displaySupervisorData($supervisor1);
     displaySupervisorData($supervisor2);

     
     echo "</div>";
     
     # Footer --------------------------------------------------
     include "Footer.php";
     ?>
     
</body>
</html>