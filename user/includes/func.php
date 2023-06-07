<?php
function redirect($location){
  $header= header("location:{$location}");
  exit;
  return $header;
}

  function clear($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlentities($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  function sqlDefine($par, $cld, $sq){
    $r = new ReflectionMethod($par, $cld);
    $result= $r->invoke(new $par(), $sq);
    return $result;
  }
