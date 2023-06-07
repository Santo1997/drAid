<?php

class tblInfo extends DBH {

  function __construct() {

    $metArr = array();
    $sql ="SELECT * FROM hospitals";
    $stmt= sqlDefine('DBH', 'quer', $sql);
    while($row = $stmt->fetchObject()) {
      $metArr[] = $row;
    }

    if(!is_dir('js/json')) {
      mkdir("js/json");
    }

    $fp = fopen('js/json/tblData.json', 'w');
    fwrite($fp, json_encode($metArr) );
    fclose($fp);

  }
}
