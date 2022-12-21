<?php

$contador=0;
if($fd = fopen('couter.txt','r')){
  $contador=fgets($fd); 
}
fclose($fd);

$fd2 = fopen('couter.txt','w');
$contador=$contador+1;
fwrite($fd,$contador);
fclose($fd2);

echo $contador
?>
