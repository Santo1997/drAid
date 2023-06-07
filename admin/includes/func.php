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

  function createtbl($tbl){
    $sql = "CREATE TABLE IF NOT EXISTS $tbl (
    uid INT(128) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    User VARCHAR(128) NOT NULL,
    Usercode VARCHAR(128) NOT NULL,
    Userdisplay VARCHAR(128) NOT NULL,
    Number VARCHAR(128) NOT NULL,
    Email VARCHAR(128) NOT NULL,
    Gender VARCHAR(128) NOT NULL,
    Password VARCHAR(128) NOT NULL,
    Image VARCHAR(128) NOT NULL,
    Title VARCHAR(128) NOT NULL,
    Religion VARCHAR(128) NOT NULL,
    EduInstitute VARCHAR(128) NOT NULL,
    EduDegree VARCHAR(128) NOT NULL,
    Whatsapp VARCHAR(128) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    return $sql;
  }
