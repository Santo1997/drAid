<?php

class deleteCls extends DBH {

  public function dltID($dltid){

    $sql = " DELETE FROM appoint where uid=?";
    $stmt= sqlDefine('DBH', 'prep', $sql);
    if (!$stmt->execute(array($dltid))) {
      redirect("delete.php?id=".$dltid."&error=stmtFailed3veri");
    }
    $stmt = null;

  }

}
