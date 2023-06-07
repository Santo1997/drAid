<?php

class profileCls extends DBH {

  protected function setProfile($usertbl,$user,$dsName,$num,$mail,$gender,$religious,$eduIns,$eduDeg,$wts,$usercode){


    $sql = " UPDATE $usertbl SET User=?, Userdisplay=?, Number=?, Email=?, Gender=?, Religion=?, EduInstitute=?, EduDegree=?, Whatsapp=?
    where Usercode=?";
    $stmt= sqlDefine('DBH', 'prep', $sql);
    if (!$stmt->execute(array($user,$dsName,$num,$mail,$gender,$religious,$eduIns,$eduDeg,$wts,$usercode))) {
      redirect("../../editing.php?id=".$editID."&error=stmtFailed3veri");
    }
    $stmt = null;

  }

}
