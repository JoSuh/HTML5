<?php 

/*
    Employee.php
    This is a PHP file that holds the Employee class
 */

class Employee {
    protected $employeeId;
    protected $firstName;
    protected $lastName;
    # ------------------------------
    function __construct($employeeId, $firstName, $lastName){
        # default constructor fro Employee object
        # need to user the format $this->variableName to access the variable
        # Note that there t=is only 1 '$' infront of the 'this'
        $this->employeeId = $employeeId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    # ------------------------------
    public function getEmployeeId(){
        return $this->employeeId;
    }
    # ------------------------------
    public function setEmployeeId($employeeId){
        $this->employeeId = $employeeId;
    }
    # ------------------------------
    public function getFirstName(){
        return $this->firstName;
    }
    # ------------------------------
    public function setFirstName($firstName){
        $this->employeeId = $firstName;
    }
    # ------------------------------
    public function getLastName(){
        return $this->lastName;
    }
    # ------------------------------
    public function setLastName($lastName){
        $this->employeeId = $lastName;
    }
}

?>