<?php

class resetCls extends DBH {

  protected function validate($pwd, $reqSelector){
    $currentDate = date("U");
    $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);

    $sql = " SELECT * FROM resetpwd WHERE rstSelector=? AND rstExpire>=?  ";
    $stmt= sqlDefine('DBH', 'prep', $sql);
    $stmt->execute(array($reqSelector,$currentDate));

    if ($rows = $stmt->fetchObject()) {

      $sql = " UPDATE $rows->rstTbl SET  Password=? where Usercode=?";
      $stmt= sqlDefine('DBH', 'prep', $sql);
      if (!$stmt->execute(array($hashPwd, $rows->rstUser))) {
        redirect("../../index.php?error=stmtFailed3veri");
      }

      $sql = " DELETE FROM resetpwd WHERE rstUser=? ";
      $stmt= sqlDefine('DBH', 'prep', $sql);
      if ($stmt->execute(array($user))) {
        $stmt = null;
      }
    }
  }
}
