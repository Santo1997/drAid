<?php

class apptCheckCls extends DBH {

  function metDataStore($user) {
    $metArr = array();
    $sql ="SELECT * FROM appoint WHERE metMail = ? OR metNumber= ?";
    $stmt= sqlDefine('DBH', 'prep', $sql);
    $stmt->execute(array($user,$user));
    while($row = $stmt->fetchObject()) {
      $metArr[] = $row;
    }
    return $metArr;
    $stmt = null;
  }
}

class apptPsonCls extends DBH {

  function psonDataStore($user){
    $metArr = array();
    $sql ="SELECT metPson, tableData FROM appoint WHERE metMail = ? OR metNumber= ?";
    $stmt= sqlDefine('DBH', 'prep', $sql);
    $stmt->execute(array($user,$user));
    while($row = $stmt->fetchObject()) {
      $sql ="SELECT User, Title, EduDegree FROM $row->tableData WHERE Usercode= ?";
      $stmt= sqlDefine('DBH', 'prep', $sql);
      $stmt->execute(array($row->metPson));
      while($rows = $stmt->fetchObject()) {
        $metArr[] = $rows;
      }
    }
    $stmt = null;
    return $metArr;
  }
}

class apptTblCls extends DBH {

  function tblDataStore($user){
    $metArr = array();
    $sql ="SELECT * FROM appoint WHERE metMail = ? OR metNumber= ?";
    $stmt= sqlDefine('DBH', 'prep', $sql);
    $stmt->execute(array($user,$user));
    while($row = $stmt->fetchObject()) {
      $tableData = $row->tableData;
      $sql ="SELECT BName FROM hospitals WHERE BCode= ?";
      $stmt= sqlDefine('DBH', 'prep', $sql);
      $stmt->execute(array($tableData));
      while($rows = $stmt->fetchObject()) {
        $metArr[] = $rows;
      }
    }
    $stmt = null;
    return $metArr;
  }
}
