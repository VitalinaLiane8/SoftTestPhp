<?php

$str = file_get_contents('./text.txt');

$ar = explode("\n", $str);
sort($ar);

$len = count($ar);
for ($i=0; $i<$len; $i++) {
  echo "$ar[$i]\n";
}

?>
