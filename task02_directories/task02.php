<?php

echo "\n";

function scan($d='', $a){
  $f=opendir($d);
  
  while(($file=readdir($f)) !==false){
      if(is_dir($d.'/'.$file) && $file!="." && $file!=".."){
      
      echo $a.$file." - ";
      
      $dirs = scandir($d."/".$file);
      $len = count($dirs);
      $dirsize = 0;
      for ($i=0; $i<$len; $i++) {
        $dirsize += filesize($d."/".$file."/".$dirs[$i]);
      }
      
      echo $dirsize / 1024;  
      echo " кб\n";      
      
      scan($d."/".$file, $a .= '  ');}
      else{
        $a = substr($a, 0, strlen($a)-2 );
      }
      
    }
  closedir($f);
}

echo scan("./", $a = '');
echo "\n";
?>
