<?php

class homeCls extends DBH {

  protected function userNumExist($num){
    $results;
    $sql = "SELECT uid FROM appoint WHERE metNumber = ? ";
    $stmt= sqlDefine('DBH', 'prep', $sql);
    $stmt->execute(array($num));
    if ($stmt->rowCount() > 0) {
      $results = false;
    }else {
      $results = true;
    }
    $stmt = null;
    return $results;
  }

  protected function userMailExist($mail){
    $results;
    $sql = "SELECT uid FROM appoint WHERE metMail = ? ";
    $stmt= sqlDefine('DBH', 'prep', $sql);
    $stmt->execute(array($mail));
    if ($stmt->rowCount() > 0) {
      $results = false;
    }else {
      $results = true;
    }
    $stmt = null;
    return $results;
  }


  protected function setMeeting($setUser, $setTbl, $metUser, $metMail, $metNum, $metDate, $metTime, $metType, $metHed, $metDeta,$expireDate){

    $sql = " INSERT INTO appoint (metPson, tableData, whoMet, metMail, metNumber, metDate, metTime, metType, metHed, metDetail,metExpire)
    VALUES (?,?,?,?,?,?,?,?,?,?,?) ";
    $stmt= sqlDefine('DBH', 'prep', $sql);
    if (!$stmt->execute(array($setUser, $setTbl, $metUser, $metMail, $metNum, $metDate, $metTime, $metType, $metHed, $metDeta,$expireDate))) {
      redirect("../../home.php?error=stmtFailed3veri");
    }
    $stmt = null;

  }

}
