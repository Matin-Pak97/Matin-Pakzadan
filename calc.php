<?php

const FORMULA_PATTERN = "/^([\ ]?[\(]*?[\ ]?[-+]?[0-9]*\.?[0-9][\(\)]*?[\ ]?[\/\+\-\*][\ ]?)+([-+]?[0-9]*\.?[0-9][\ ]?[\(\)]*)/";

function calc($formula) {
    if (checkFormulaValidation($formula)) {
        try {
            return "Answer of this '" . $formula . "' is (" . eval("return {$formula};") . ")";
        } catch (Error $ex) {
            return 'Something went run!! Please make sure about validation of your formula formula.';
        }
    } else {
        return 'Something went run!! Please make sure about validation of your formula formula.';
    }
}

function checkFormulaValidation($formula) {
    return preg_match(FORMULA_PATTERN, $formula);
}