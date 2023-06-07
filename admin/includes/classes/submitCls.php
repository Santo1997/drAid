<?php

class submitCls extends DBH {

  protected function validate($reqToken, $reqSelector){
    $religion = 'None';
    $eduInstitute = 'None';
    $EduDegree = 'None';
    $whatsapp = 'None';
    $currentDate = date("U");

    $sql = " SELECT * FROM userverify WHERE userSelector=? AND userExpire>=? ";
    $stmt= sqlDefine('DBH', 'prep', $sql);
    $stmt->execute(array($reqSelector,$currentDate));

    if ($rows = $stmt->fetchObject()) {
      $tokenBin = hex2bin($reqToken) ;
      $tokenChk = password_verify($tokenBin, $rows->userToken);

      if ($tokenChk== true) {
        $hashedPwd = password_hash($rows->Password, PASSWORD_DEFAULT);

        if ($rows->Userinfo === 'none') {
          //create personal user
          $title = 'Admin';
          $image = 'user.svg';
          $sql = " INSERT INTO myuser (User,UserCode,Userdisplay,Number,Email,Gender,Password,Image,Title,Religion,EduInstitute,EduDegree,Whatsapp)
          VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?) ";
          $stmt= sqlDefine('DBH', 'prep', $sql);
          if (!$stmt->execute(array($rows->User,$rows->UserCode,$rows->UserCode,$rows->Number,$rows->Email,$rows->Gender,$hashedPwd,$image,$title,$religion,$eduInstitute,$EduDegree,$whatsapp))) {
            redirect("../../signup.php?error=stmtFailed3veri");
          }
        }else {
          //create hospitals user

          $sql = "SELECT * FROM hospitals WHERE BName = ? OR BCode = ?";
          $stmt= sqlDefine('DBH', 'prep', $sql);
          $stmt->execute(array($rows->Userinfo, $rows->Userinfo));
          if ($stmt->rowCount() > 0) {

           $results = $stmt->fetchObject();
           $dbname = $results->BCode;
          //set admin
            $title = 'Member';
            $image = 'user.svg';
          //set user
           $sql = " INSERT INTO $dbname (User,UserCode,Userdisplay,Number,Email,Gender,Password,Image,Title,Religion,EduInstitute,EduDegree,Whatsapp)
           VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?) ";
           $stmt= sqlDefine('DBH', 'prep', $sql);
           if (!$stmt->execute(array($rows->User,$rows->UserCode,$rows->UserCode,$rows->Number,$rows->Email,$rows->Gender,$hashedPwd,$image,$title,$religion,$eduInstitute,$EduDegree,$whatsapp))) {
             redirect("../../signup.php?error=stmtFailed3veri");
           }

          }else {

            $title = 'Admin';
            $image = 'user.svg';
            $sql = " INSERT INTO hospitals (BName, BCode) VALUES (?,?) ";
            $stmt= sqlDefine('DBH', 'prep', $sql);
            if (!$stmt->execute(array($rows->Userinfo, $rows->UserinfoCode))) {
              redirect("../../signup.php?error=stmtFailed3veri");
            }

            $dbname = $rows->UserinfoCode;
            $sql = createtbl($dbname);
            $result= sqlDefine('DBH', 'quer', $sql);

            $sql = " INSERT INTO $dbname (User,UserCode,Userdisplay,Number,Email,Gender,Password,Image,Title,Religion,EduInstitute,EduDegree,Whatsapp)
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?) ";
            $stmt= sqlDefine('DBH', 'prep', $sql);
            if (!$stmt->execute(array($rows->User, $rows->UserCode,$rows->UserCode, $rows->Number, $rows->Email, $rows->Gender, $hashedPwd,$image,$title,$religion,$eduInstitute,$EduDegree,$whatsapp))) {
              redirect("../../signup.php?error=stmtFailed3veri");
            }

          }

        }
        $sql = " DELETE FROM userverify WHERE Email=? ";
        $stmt= sqlDefine('DBH', 'prep', $sql);
        $stmt->execute(array($rows->Email));
        $stmt = null;
      }
    }
  }
}
