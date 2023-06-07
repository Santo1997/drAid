<?php

class imgCls extends DBH {

  protected function setProPic($usertbl,$usercode,$img){

    if ($img['error'] === 0) {
      $fileName = $img['name'];
      $fileSize = $img['size'];
      $tmpName = $img['tmp_name'];
      $validImg = ['png', 'jpg', 'jpeg'];
      $imgExtn = explode('.' , $fileName);
      $imgExtn = strtolower(end($imgExtn));

      if (!in_array($imgExtn, $validImg)) {
        redirect("../profile.php?user=".$usercode."&err=Invalid");
      }elseif ($fileSize>2000000) {
        redirect("../profile.php?user=".$usercode."&err=Invalid");
      }else {
        $newName = uniqid();
        $newName .= '.' . $imgExtn;
        move_uploaded_file($tmpName, '../media/upload/'.$newName);
        $newName = '../media/upload/'.$newName;
        $sql = " UPDATE $usertbl SET Image=? where Usercode=?";

        $stmt= sqlDefine('DBH', 'prep', $sql);

        if (!$stmt->execute(array($newName, $usercode))) {
          redirect("../profile.php?user=".$usercode."&err=stmtError");
        }

        $sql = "SELECT Image FROM $usertbl WHERE Usercode = ? ";
        $stmt= sqlDefine('DBH', 'prep', $sql);
        $stmt->execute(array($usercode));
        if ($users = $stmt->fetchObject()){
          session_start();
          unset($_SESSION["Image"]);
          $_SESSION["Image"] = $users->Image;
        }
        $stmt = null;
      }
    }








  }

}
