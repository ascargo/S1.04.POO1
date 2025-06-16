<?php
declare(strict_types=1);

require_once 'classes/Employee.php';

$Asier = new Employee("Asier Carrasco", 1000);
$Asier->shallPayTaxes();
$Emp1088 = new Employee("Jane Doe", 15000);
$Emp1088->shallPayTaxes();
$Emp1089 = new Employee("John Doe", 6000);
$Emp1089->shallPayTaxes();