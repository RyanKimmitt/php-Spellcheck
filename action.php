<?php
include('index.php');
function linearDictionarySearch($item, $dictionary)
{
  
  $time_start = microtime(true);
  $value = linearSearch($item, $dictionary);
  $time_end = microtime(true);

  $execution_time = ($time_end - $time_start);
  $netReturn = json_encode(array($value, $execution_time));
  echo $netReturn;
}

linearDictionarySearch($_POST["linear"], $dictionary);

?>