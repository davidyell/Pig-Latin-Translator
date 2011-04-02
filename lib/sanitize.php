<?php
/**
 * Make inputs safe and strip out all the nasty things
 *
 * @author Neon
 */
class Sanitize {

    function __autoload(){
        include_once('lib/sanitize.php');
    }
    
    /**
     * Run strip tags on the input to do a quick sweep
     * @param <string> $input - The input string
     * @param <int> $level - The level to which we should strip out nasties (1,2)
     * @return <type> 
     */
    function removeCode($input, $level = '1'){
        if(is_string($input)){

            switch ($level) {
                case 1:
                default:
                    return strip_tags($input);
                    break;
                case 2:
                    $r = strip_tags($input);
                    $r = preg_replace("/[^a-zA-Z0-9]/", '', $input);
                    return $r;
                    break;
            }

        }else{
            return false;
        }
    }

    /**
     * Remove the punctiation to avoid things like oday?-tay
     * @param <string> $input
     * @return <string>
     */
    function removePunctuation($input){
        return preg_replace("/[^\w\s]/", '', $input);
    }

}
?>
