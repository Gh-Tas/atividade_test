<?php 

include 'autoloader.php';
$freeShippingCalculator = new FreeShippingCalculatorTest();
$freeShippingCalculator->ShouldApply_WhenValueIsAboveMinimumTest();

?>