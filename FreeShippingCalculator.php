<?php

     class FreeShippingCalculator {

        const FREE_SHIPPING_MINIMUM = 150;

        public function apply($value) {

            if($value >= self::FREE_SHIPPING_MINIMUM) {

                return 0;

            } 

        }

     }


?>