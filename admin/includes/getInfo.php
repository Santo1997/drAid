<?php

class getInfo extends DBH {

  function getUser($tbl,$uid) {
    $result;
    $sql = "SELECT * FROM $tbl WHERE uid=? OR Usercode =? ; ";
    $stmt= sqlDefine('DBH', 'prep', $sql);
    $stmt->execute(array($uid,$uid));
    $row = $stmt->fetchObject();
    $result = $row->Usercode;
    return $result;
  }

  function tdsPending($tbl,$user){
   $result = array();
   $date = new DateTime('now', new DateTimezone('Asia/Dhaka'));
   $date = $date->format('d-m-Y');
   $sql = "SELECT * FROM appoint WHERE tableData=? and metPson =? and metdate =?  ; ";
   $stmt= sqlDefine('DBH', 'prep', $sql);
   $stmt->execute(array($tbl,$user,$date));
   while($row = $stmt->fetchObject()) {
     array_push($result , $row->uid);
   }
   return count($result);
 }

 function pending($tbl,$user){
   $result = array();
   $sql = "SELECT * FROM appoint WHERE tableData=? and metPson =?  ; ";
   $stmt= sqlDefine('DBH', 'prep', $sql);
   $stmt->execute(array($tbl,$user));
   while($row = $stmt->fetchObject()) {
     array_push($result , $row->uid);
   }
   return count($result);
 }

 function success($tbl,$user){
   $result = array();
   $sql = "SELECT * FROM aptsuccess WHERE tableData=? and metPson =?  ; ";
   $stmt= sqlDefine('DBH', 'prep', $sql);
   $stmt->execute(array($tbl,$user));
   while($row = $stmt->fetchObject()) {
     array_push($result , $row->uid);
   }
   return count($result);
 }
}
