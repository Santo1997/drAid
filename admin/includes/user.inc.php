<?php

class user extends DBH {

  function __construct($tbl) {

    $userArr = array();
    $sql ="SELECT * FROM $tbl";
    $result= sqlDefine('DBH', 'quer', $sql);
    while($row = $result->fetchObject()) {
      $userArr[] = $row;
    }

    if(!is_dir('../js/json')) {
      mkdir("../js/json");
    }

    $fp = fopen('../js/json/userData.json', 'w');
    fwrite($fp, json_encode($userArr) );
    fclose($fp);

  }
}
