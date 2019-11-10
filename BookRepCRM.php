<?php

    /*
        Code modified by Jo Suh
        Date:   11/03/2019
        CST8238
        Assignment 2
     */

    header('Content-Type: text/html; charset=ISO-8859-1'); //add in order to read special characters

    function printItemInRow(String $item){
        # prints the given String in tabl element
        echo "<td>" . $item ."</td>";
    }
    
    function printCustomersAsTable(){
        # reads and prints the customers in the customer.txt to array and print the data
        /*
        customer.txt stores the following information in each line:
            customer id, first name, last name, email,university, address, city, state, country, zip/postal, phone
        */
        $customers = array();
        $inputFile = file("customers.txt") or die ("Error: 'customers.txt' file not found");

        foreach ( $inputFile as $eachLine ){
            # while file has line
            $eachData = explode(",", $eachLine); //separate the line data by commas
            # $eachData = {customer id,first name,last name,email,university,address,city,state,country,zip/postal,phone};
            
            $currentCustomerId = $eachData[0];
            
            if ( array_key_exists($currentCustomerId, $customers) ){
                #check if a customer with the customer id exists in the array already
                die ("Error: invalid file: repeating customer id '" . $currentCustomerId . "'");
            }
            
            # put data into array with the customer id as key
            $customers[$currentCustomerId] = array( $eachData[1], $eachData[2], $eachData[3], $eachData[4], $eachData[6] );
            # ONLY need-> 0:first name, 1:last name, 2:Email, 3:University, 4:City
            #   so disregard the other data
            
            
            echo "<tr>";
            # The customer name will be a link to the same file but with the customer id as a query string parameter
            $customerName = $customers[$currentCustomerId][0] . " " . $customers[$currentCustomerId][1];
            # print full name as a link
            $currentPath = "http://suh00010.com/CST8238/Assignment2/BookRepCRM.php";
            echo "<td>";
            echo "<a href='" . $currentPath . "?id=" . $currentCustomerId . "&name=".$customerName."'>";
            echo  $customerName. "</a>";
            echo "</td>";
            for ($i=2 ; $i< sizeof($customers[$currentCustomerId]) ; ++$i){
                # print rest of the data
                printItemInRow($customers[$currentCustomerId][$i]);
            }
            echo "</tr>";
        }
        fclose($inputFile);
    }
    
    
    
    function readAndCheckIfOrder(){
        # read data from orders.txt into an array, and checks if there are any that matches the customer id
        /*
         orders.txt stores the following information in each line:
             order id, customer id, book ISBN, book title, book category
             */
        
        $stringQueries = array();
        parse_str($_SERVER['QUERY_STRING'], $stringQueries);
        # $stringQueries["id"] = customer id
        # $stringQueries["name"] = customer name
        
        if ( array_key_exists("id", $stringQueries) ||  array_key_exists("name", $stringQueries) ){
            $ordersForTheCustomer = array();
            $inputFile = file("orders.txt") or die ("Error: 'orders.txt' file not found");

            foreach ( $inputFile as $eachLine ){
                # while file has line
                $eachData = explode(",", $eachLine); //separate the line data by commas
                # $eachData = {order id, customer id, book ISBN, book title, book category};
                # sort int oarray by customer id
                
                $currentCustomerId= $eachData[1];
                
                if ( $stringQueries["id"] == $currentCustomerId ){
                    # ONLY need->   0:book ISBN, 1:book title, 2:book category
                    #   so disregard the rest
                    array_push($ordersForTheCustomer, array($eachData[2], $eachData[3], $eachData[4]) );
                }
            }
            
            # print results into tables
            echo "<div class='panel panel-danger spaceabove'>";
            
            if ( sizeof($ordersForTheCustomer)==0 ){
                # if no order data
                echo "<table class='table'><tr>";
                printItemInRow("<br>No orders for that customer<br><br>");
                echo "</tr></table></table></div>";
                
            } else{
                # if there are order lists
                echo "<div class='panel-heading'><h4>" . "Orders for " . $stringQueries["name"] . "</h4></div>";
                echo "<table class='table'>";
                echo "<tr><th>"."ISBN"."</th><th>"."Title"."</th><th>"."Category"."</th></tr>";

                foreach ($ordersForTheCustomer as $eachOrder){
                    echo "<tr>";
                    foreach ( $eachOrder as $eachData ){
                        printItemInRow($eachData);
                    }
                    echo "</tr>";
                }
                echo "</table></div>";
            }
            
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; 
   charset=UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Book Template</title>

   <link rel="shortcut icon" href="../../assets/ico/favicon.png">

   <!-- Google fonts used in this theme  -->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>  

   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_bookTheme/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Bootstrap theme CSS -->
   <link href="bootstrap3_bookTheme/theme.css" rel="stylesheet">


   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="bootstrap3_bookTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_bookTheme/assets/js/respond.min.js"></script>
   <![endif]-->
</head>

<body>

<?php include 'book-header.inc.php'; ?>
   
<div class="container">
   <div class="row">  <!-- start main content row -->

      <div class="col-md-2">  <!-- start left navigation rail column -->
         <?php include 'book-left-nav.inc.php'; ?>
      </div>  <!-- end left navigation rail --> 

      <div class="col-md-10">  <!-- start main content column -->
        
         <!-- Customer panel  -->
         <div class="panel panel-danger spaceabove">           
           <div class="panel-heading"><h4>My Customers</h4></div>
           <table class="table">
             <tr>
               <th>Name</th>
               <th>Email</th>
               <th>University</th>
               <th>City</th>
             </tr>
             <?php printCustomersAsTable() ?>
           </table>
         </div>
         
         <?php readAndCheckIfOrder() ?>

      </div>


      </div>  <!-- end main content column -->
   </div>  <!-- end main content row -->
</div>   <!-- end container -->
   


   
   
 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_bookTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_bookTheme/dist/js/bootstrap.min.js"></script>
 <script src="bootstrap3_bookTheme/assets/js/holder.js"></script>
</body>
</html>