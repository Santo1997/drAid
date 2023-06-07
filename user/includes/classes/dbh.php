<?php

class DBH {

  protected function connect() {
    try {
      $username="root";
      $password="";
      $conn = new PDO("mysql:host=localhost;dbname=appointments", $username,$password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch (PDOException $e) {
      echo $e->getMassage();
    }
  }

  protected function prep($sql){
    $stmt= $this->connect()->prepare($sql);
    return $stmt;
  }

  protected function quer($sql){
    $stmt= $this->connect()->query($sql);
    return $stmt;
  }
}
