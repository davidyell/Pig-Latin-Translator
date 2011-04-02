<?php
/**
 * A place to keep a note of the rules that we have
 *
 *
 * @author Neon
 */
class Rules extends Object{

    function __autoload(){
        include_once('lib/rules.php');
    }

    // Store our set of rules
    public static $consonant = '';
    public static $vowel = '';
    public static $other = '';

    function  __construct() {
        global $_CONF;

        // Store a set of rules, as we create them from the config
        $this->consonant = '/^([^'.$_CONF['vowels'].$_CONF['additional'].']*)(.*)/';
        $this->vowel = '/^(['.$_CONF['vowels'].']+)(.*)/';
        $this->other = '/^('.$_CONF['additional'].'+)(.*)/';
    }

    // Starts with a Consonant
    public function startConsonant($string){
        global $_CONF;

        // We want to look to see if the string starts with a character not in our configured list
        if(preg_match($this->consonant, $string) == 1){
            return true;
        }else{
            return false;
        }
    }
    // Output, [$2-$1ay]

    // Starts with a Vowel
    public function startVowel($string){
        global $_CONF;

        if(preg_match($this->vowel, $string) == 1){
            return true;
        }else{
            return false;
        }
    }
    // Ouput, [$1$2'$_CONF['vowelending']]

    // Starts with other, eg. Qu
    public function startOther($string){
        global $_CONF;

        if(preg_match($this->other, $string) == 1){
            return true;
        }else{
            return false;
        }
    }
    // Output [$2-$1ay]

}
?>
