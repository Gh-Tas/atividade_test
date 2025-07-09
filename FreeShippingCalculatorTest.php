<?php 
    class FreeShippingCalculatorTest{
        public function ShouldApply_WhenValueIsAboveMinimumTest(){
            $FreeShippingCalculator = new FreeShippingCalculator();

            $totalValue = 149;
            $totalWithShipping = $FreeShippingCalculator->apply(value:$totalValue);

            $expectedValue = 0;
            $this->assertEquals($expectedValue, actualValue: $totalValue);
        }
        public function assertEquals($expectedValue, $actualValue){
            if ($expectedValue !== $actualValue) {
                $message = 'Expected: ' . $expectedValue . ' but got: ' . $actualValue;
                throw new Exception(message: $message);
            }
            echo "Test passed! \n";
        }
    }
?>