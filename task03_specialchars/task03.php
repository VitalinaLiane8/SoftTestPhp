<?php 
$html = "<a href='test'>Test</a>";


function pers_htmlspecialchars($str, $quote=null)
{
  $len = strlen($str);

  for ($i=0; $i<$len; $i++) {

    if ($str[$i] == '&') {
      $str = substr_replace($str, '&amp;', $i, 1);
      $i += 4;
      $len += 4;
    }
    elseif ($str[$i] == '"') {
      if ($quote == ENT_NOQUOTES) {
        $str = substr_replace($str, '&quot;', $i, 1);
        $i += 5;
        $len += 5;
      }
    }
    elseif ($str[$i] == "'") {
      if ($quote == ENT_QUOTES) {
        $str = substr_replace($str, '&#039;', $i, 1);
        $i += 5;
        $len += 5;
      }
    }
    elseif ($str[$i] == '<') {
      $str = substr_replace($str, '&lt;', $i, 1);
      $i += 3;
      $len += 3;
    }
    elseif ($str[$i] == '>') {
      $str = substr_replace($str, '&gt;', $i, 1);
      $i += 3;
      $len += 3;
    }

  }  
  return $str;
}

//$res = htmlspecialchars($html, ENT_QUOTES);
//echo "$res\n"; 

$pers_res = pers_htmlspecialchars($html, ENT_QUOTES);
echo $pers_res; 

?>
