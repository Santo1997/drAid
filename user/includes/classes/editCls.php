<?php

class editCls extends DBH {

  protected function editUpdate($editID, $tbl, $setUser, $metUser, $metMail,$metnum,$metDate, $metTime, $metType, $metHed, $metDeta){

    $sql = " UPDATE appoint SET metPson=?, whoMet=?, metMail=?, metNumber=?, metDate=?, metTime=?, metType=?, metHed=?, metDetail=?
    where uid=? and tableData=?";
    $stmt= sqlDefine('DBH', 'prep', $sql);
    if (!$stmt->execute(array($setUser, $metUser, $metMail,$metnum,$metDate, $metTime, $metType, $metHed, $metDeta,$editID,$tbl))) {
      redirect("../../editing.php?id=".$editID."&error=stmtFailed3veri");
    }
    $stmt = null;

  }

}
