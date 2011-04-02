<?php
/**
 * A place to keep a note of the rules that we have
 *
 *
 * @author Neon
 */
class Rules extends Object{

    // Starts with a Consonant
    public function startConsonant($string){
        global $_CONF;

        // We want to look to see if the string starts with a character not in our configured list
        if(preg_match('/^[^'.$_CONF['vowels'].$_CONF['additional'].']+/gim', $string) == 1){
            return true;
        }else{
            return false;
        }
    }

    // Starts with a Vowel
    public $vowel = '/^[aeiou]+/gim';
    public function startVowel($string){

    }

    // Starts with other, eg. Qu


}
?>
