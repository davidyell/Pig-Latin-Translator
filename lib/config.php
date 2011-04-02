<?php

/**
 * A set of rules for configuring the application
 *
 * @author Neon
 */

$_CONF = array();
    
// Store the vowels, or other characters that we want to break up words with
$_CONF['vowels'] = 'aeiou';

// Store a set of other rules that we can use to split words
$_CONF['additional'] = 'qu';

// Set if we want debugging on
$_CONF['debugging'] = false;

/*
 * A function to turn on the display of errors
 */
function debugging($switch = false){
    if($switch){
        ini_set('display_errors','On');
        ini_set('error_reporting',E_ALL);
    }else{
        ini_set('display_errors','Off');
    }
}
?>
