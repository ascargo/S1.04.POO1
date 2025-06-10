<?php
class Employee {
    public $name;
    private $salary;

    function __construct ($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    function get_name() {
        return $this->name;
    }

    function get_salary() {
        return $this->salary;
    }

    function shallPayTaxes() {
       /* if ($this->salary >= 6000) {
            echo $this->name . "does have to pay taxes.";
        } else {
            echo $this->name . " Does NOT have to pay taxes.";
        } */
       echo $this->name . " does " . ($this->salary <= 6000 ? "NOT" : "") . " have to pay taxes.<br>";
    }
}
    
$Asier = new Employee("Asier Carrasco", 1000);
$Asier->shallPayTaxes();
$Emp1088 = new Employee("Jane Doe", 15000);
$Emp1088->shallPayTaxes();
$Emp1089 = new Employee("John Doe", 6000);
$Emp1089->shallPayTaxes();

?>