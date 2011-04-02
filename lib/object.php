<?php

/**
 * A base object
 *
 * @author Neon
 */
class Object {

    function __autoload($c){
        include_once('lib/'.$c);
    }

    function  __construct() {
        
    }

}
?>
