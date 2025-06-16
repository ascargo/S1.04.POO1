<?php
declare(strict_types=1);

class Employee {
    private string $name;
    private float $salary;

    function __construct (string $name, float $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    function shallPayTaxes() {
    echo $this->name . " does " . ($this->salary <= 6000 ? "NOT" : "") . " have to pay taxes.<br>";
    }
}
?>