<?php

class meeting extends DBH {

  function __construct($tbl,$user) {

    $metArr = array();
    $sql ="SELECT * FROM appoint WHERE tableData = ? AND metPson = ?";
    $stmt= sqlDefine('DBH', 'prep', $sql);
    $stmt->execute(array($tbl,$user));
    while($row = $stmt->fetchObject()) {
      $metArr[] = $row;
    }

    if(!is_dir('js/json')) {
      mkdir("js/json");
    }

    $fp = fopen('js/json/metData.json', 'w');
    fwrite($fp, json_encode($metArr) );
    fclose($fp);

  }
}
