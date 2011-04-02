<?php
require_once('boot.php');

if(isset($_POST) && !empty($_POST)){
    $translate = new Translate();
    $result = $translate->doConversion($_POST['msg']);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Pig Latin Translator</title>

        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.2.0/build/cssreset/reset-min.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    </head>
    <body>
        <div id="wrapper">
            <h1>Pig Latin Translator</h1>

            <form action="" method="post">

                <div class="formrow">
                    <label for="data">Enter your english word</label>
                    <textarea rows="6" cols=75" name="msg" id="msg"><?php if(!empty($_POST['msg'])){ echo $_POST['msg']; }?></textarea>
                </div>

                <div class="formrow result">
                    <p>Translates to: </p>
                    <p id="result"><?php if(isset($result)){ echo $result; }?></p>
                </div>

                <div class="formrow submit">
                    <input type="submit" name="submitData" id="submitData" value="Translate &raquo;" />
                </div>
            </form>
        </div>
    </body>
</html>
