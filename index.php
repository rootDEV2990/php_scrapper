
<?php 
$html = file_get_contents('https://weather.com/es-US/tiempo/hoy/l/Sayulita+M%C3%A9xico+MXNT1276:1:MX'); //get raw data turn to string
echo $html;
?>