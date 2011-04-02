<?php

/**
 * Validate certain inputs and make them safe
 *
 * This will combine some Validation and some Sanitization, the destinction between 'wrong' input and 'dangerous' input
 * would determine the class seperation here, unless you wanted to implement your validation rules in your sanitization
 * then I would use Static methods to class Validate in Sanitize, but allowing both to function independantly
 *
 * @author Neon
 */
class Validate extends Object{

    /**
     * Check to see if something is letters
     * @param string $input
     * @return boolean
     */
    public function isWord($input){
        if(preg_match("^[a-zA-Z]+^", $input) == 1){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Force everything to be lowercase for simplicity
     * @param string $input
     * @return string
     */
    public function changeCase($input){
        return strtolower($input);
    }

}
?>
