<?php

include_once('lib/config.php');

$classes = glob('lib/*.php');
foreach($classes as $c){
    include_once($c);
}

?>
