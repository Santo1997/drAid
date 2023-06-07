<?php

  class rstReqCls extends DBH {


    protected function tblUserExist($tbl, $user){
      $results;
      $sql = " SELECT * FROM $tbl WHERE Usercode = ? ";
      $stmt= sqlDefine('DBH', 'prep', $sql);

        $stmt->execute(array($user));
        if ($stmt->rowCount() > 0) {
          $results = false;
        }else {
          $results = true;
        }
      $stmt = null;
      return $results;
    }


    protected function maillAdd($tbl, $user){
      $sql = " SELECT * FROM $tbl WHERE Usercode = ? ";
      $stmt= sqlDefine('DBH', 'prep', $sql);
      $stmt->execute(array($user));
      if ($rows = $stmt->fetchObject()) {
        return $rows->Email;
      }
    }

    protected function usercheck($user){
      $results;
      $sql = " DELETE FROM resetpwd WHERE rstUser=? ";
      $stmt= sqlDefine('DBH', 'prep', $sql);
      if ($stmt->execute(array($user))) {
        $stmt = null;
        $results = true;
        return $results;
      }
    }

    protected function setRstToken($user, $tbl, $selector, $expire) {

      $sql = " INSERT INTO resetpwd (rstUser, rstTbl, rstSelector,rstExpire)
      VALUES (?,?,?,?) ";
      $stmt= sqlDefine('DBH', 'prep', $sql);
      if (!$stmt->execute(array($user, $tbl, $selector, $expire))) {
        redirect("../index.php?error=stmtFailedsetTokenUser");
      }
      $stmt = null;
    }

  }
