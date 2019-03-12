<?php
function writeSecretSentence($param1,$param2)
{
$phrase="$param1 s'incline face à $param2 <br/>"; 
return $phrase;

}

$param1="le chat";
$param2="la lune";
$phrase = writeSecretSentence($param1,$param2);
echo $phrase;

$param1="le chien";
$param2="le feu";
$phrase = writeSecretSentence($param1,$param2);
echo $phrase;

$param1="l'ours";
$param2="le soleil";
$phrase = writeSecretSentence($param1,$param2);
echo $phrase;
?>
