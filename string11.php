<?php
$text = "The quick brown foc jumped over the lazy dog. ";
$newtext = wordwrap($text, 15, " <br> ");

echo $text. "<br><br>";
echo $newtext;
?>