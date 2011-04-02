<?php

/**
 * A class to translate regular English text into a Pig Latin
 *
 * @author Neon
 */
class Translate extends Rules{
    
    function __autoload(){
        include_once('lib/translate.php');
    }

    function  __construct() {
        parent::__construct();
    }

    // The list of words that we are going to process
    public $wordlist = array();

    /**
     * The main function to translate a set of words from English to PigLatin
     * @global <array> $_CONF
     * @param <string> $input
     * @return string 
     */
    public function doConversion($input){
        global $_CONF;
        $return = '';

        // Check the input
        $validate = new Validate();
        if($validate->isOkay($input)){

            // Sanitize
            $clean = new Sanitize();
            $input = $clean->removeCode($input);
            $input = $clean->removePunctuation($input);

            // Get a list of words
            $this->wordlist = explode(' ', $input);

            foreach($this->wordlist as $word){
                // Check the rules and Translate
                if(parent::startVowel($word)){
                    $return .= preg_replace($this->vowel, "$1$2'".$_CONF['vowelending'], $word);

                }elseif(parent::startConsonant($word)){
                    $return .= preg_replace($this->consonant, "$2-$1ay", $word);

                }elseif(parent::startOther($word)){
                    $return .= preg_replace($this->other, "$2-$1ay", $word);

                }

                // We want to add a space after the word
                $return .= " ";
            }
        }        

        // Return
        return $return;
    }

}
?>
