<?php
/**
 * Make inputs safe and strip out all the nasty things
 *
 * @author Neon
 */
class Sanitize {
    
    /**
     * Run strip tags on the input to do a quick sweep
     * @param <string> $input - The input string
     * @param <string> $level - The level to which we should strip out nasties
     * @return <type> 
     */
    function removeCode($input, $level = 'low'){
        if(is_string($input)){
            return strip_tags($input);
        }else{
            return false;
        }
    }

}
?>
