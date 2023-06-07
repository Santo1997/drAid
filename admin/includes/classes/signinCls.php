<?php

class signinCls extends DBH {

  protected function getUser($user, $pwd) {

    $arr = array();
    $sql = "SELECT * FROM hospitals";
    $stmt= sqlDefine('DBH', 'quer', $sql);
    $len = $stmt->rowCount();

    while ($a = $stmt->fetchObject()) {
      array_push($arr,$a->BCode);
    }

    for ($i=0; $i < $len ; $i++) {
      $sql ="SELECT * FROM $arr[$i] where Usercode=?";
      $stmt= sqlDefine('DBH', 'prep', $sql);
      $stmt->execute(array($user));
      if ($result = $stmt->fetchObject()) {
        $datatbl = $arr[$i];
        $pwdHashed = $result->Password;
      }
    }

    $checkPwd = password_verify($pwd , $pwdHashed);

    if ($checkPwd == false) {
      $stmt = null;
      redirect("../index.php?error=wrongPwd");
    }elseif ($checkPwd == true) {

      $sql = "SELECT * FROM $datatbl WHERE Usercode = ? ";
      $stmt= sqlDefine('DBH', 'prep', $sql);
      $stmt->execute(array($user));

      if ($users = $stmt->fetchObject()) {
        session_start();
        $_SESSION['acct'] = $datatbl;
        $_SESSION['uid'] = $users->uid;
        $_SESSION['Username'] = $users->User;
        $_SESSION['Usercode'] = $users->Usercode;
        $_SESSION['Image'] = $users->Image;

        $userArr = array();
        $sql ="SELECT * FROM $datatbl";
        $result= sqlDefine('DBH', 'quer', $sql);
        while($row = $result->fetchObject()) {
          $userArr[] = $row;
        }

        if(!is_dir('../js/json')) {
          mkdir("../js/json");
        }
        $fp = fopen('../js/json/userData.json', 'w');
        fwrite($fp, json_encode($userArr) );
        fclose($fp);
        $stmt = null;

      }
    }
  }
}
