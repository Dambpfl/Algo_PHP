<h1>Exercice 3</h1>

<?php
$phrase = "Notre formation DL commence aujourd'hui". "<br>";
echo $phrase;

$patterns = array();
$patterns[0] = "/aujourd'hui/";
$replacements[0] = "demain";
echo preg_replace($patterns,$replacements,$phrase);