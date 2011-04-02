<?php

/**
 * Validate certain inputs and make them safe
 *
 * @author Neon
 */
class Validate extends Object{

    function __autoload(){
        include_once('lib/validate.php');
    }

    // Store any validation errors
    public $error = '';

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

    /**
     * Ensure that there is something to translate
     * @param string $input
     * @return boolean
     */
    public function isOkay($input){
        // Make sure it's not empty
        if(empty($input)){
            $this->error = 'Please enter some text to translate';
            return false;
        }
        // Ensure there are some letters
        if(!$this->isWord($input)){
            $this->error = 'Please enter some words';
            return false;
        }

        return true;
    }

}
?>
