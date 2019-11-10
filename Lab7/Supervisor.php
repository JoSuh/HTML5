<?php 
/*
 Supervisor.php
 This is a PHP file that holds the Employee class
 */

class Supervisor extends Employee {
    private $employees;
    
    # ------------------------------
    function __construct($employeeId, $firstName, $lastName, $employees){
        # default constructor fro Supervisor object
        # need to user the format $this->variableName to access the variable
        $this->employees = $employees;
        parent::__construct($employeeId, $firstName, $lastName);
    }
    
    # ------------------------------
    public function getEmployees(){
        return $this->employees;
    }
    
    # ------------------------------
    public function setEmployees($employees){
        $this->employees = $employees;
    }
}

?>