<?php
class AlphanumericValidator {

//    function returnFieldJS() {
//        return '
//                        return value + " [added by JS]";
//                ';
//    }

    function evaluateFieldValue($value, $is_in, &$set) {
        return $value . ' [added by PHP ALPHA]';
    }
}