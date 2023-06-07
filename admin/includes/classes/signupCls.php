<?php

  class signupCls extends DBH {

    protected function userExist($mail){
      $results;
      $sql = "SELECT uid FROM myuser WHERE Email = ? ";
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

    protected function tblExist($businessID, $businessCode){
      $results;

      $sql = "SELECT uid FROM hospitals WHERE BName = ? OR BCode = ? ";
      $stmt= sqlDefine('DBH', 'prep', $sql);
      if (!$stmt->execute(array($businessID, $businessCode))) {
        $stmt = null;
        header("location: ../../signup.php?error=stmtFailed1bus");
        exit;
      }

      if ($stmt->rowCount() > 0) {
        $results = false;
      }else {
        $results = true;
      }
      return $results;
    }

    protected function tblUserExist($businessID,$mail){
      $results;

      $sql = " SELECT * FROM hospitals WHERE BName=? OR BCode= ?";
      $stmt= sqlDefine('DBH', 'prep', $sql);
      $stmt->execute(array($businessID,$businessID));
      if ($rows = $stmt->fetchObject()) {
        $tblcheck = $rows->BCode;
      }

      $sql = "SELECT uid FROM $tblcheck WHERE Email = ? ";
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

    protected function usercheck($mail){
      $results;
      $sql = " DELETE FROM userverify WHERE Email=? ";
      $stmt= sqlDefine('DBH', 'prep', $sql);
      if ($stmt->execute(array($mail))) {
        $stmt = null;
        $results = true;
        return $results;
      }
    }

    protected function setTokenUser($businessID, $businessCode, $user, $userCode, $num, $mail, $gender, $pwd, $selector, $token, $expire) {
      $hashTkn = password_hash($token, PASSWORD_DEFAULT);
      $sql = " INSERT INTO userverify (Userinfo, UserinfoCode, User, UserCode, Number, Email, Gender, Password, userSelector, userToken, userExpire)
      VALUES (?,?,?,?,?,?,?,?,?,?,?) ";
      $stmt= sqlDefine('DBH', 'prep', $sql);
      if (!$stmt->execute(array($businessID, $businessCode, $user, $userCode, $num, $mail, $gender, $pwd, $selector, $token, $expire))) {
        redirect("../signup.php?error=stmtFailedsetTokenUser");
      }
      $stmt = null;
    }

  }
