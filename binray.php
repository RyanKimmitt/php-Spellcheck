<?php


include("index.php");

function binarayDictionaraySearch($item, $dictionary)
{
  $time_start = microtime(true);
  $value = binaraySearch($item, $dictionary);
  $time_end = microtime(true);

  $execution_time = ($time_end - $time_start);
  $netReturn = json_encode(array($value, $execution_time));
  echo $netReturn;
}

binarayDictionaraySearch($_GET['binaray'], $dictionary);