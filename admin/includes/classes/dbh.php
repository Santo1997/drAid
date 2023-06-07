<?php

class DBH {

  protected function connect() {
    try {
      //dbname=epiz_33321995_appointments	
      $username="root";//epiz_33321995
      $password="";//XCLPQNYHlIPbVLT
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














/*

CREATE TABLE myuser(
    uid INT(128) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    User VARCHAR(128) NOT NULL,
    Number VARCHAR(128) NOT NULL,
    Email VARCHAR(128) NOT NULL,
    Gender VARCHAR(128) NOT NULL,
    Password VARCHAR(128) NOT NULL,
    Title VARCHAR(128) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
CREATE TABLE imgcart(
    imgid INT(128) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Tag VARCHAR(128) NOT NULL,
    Info VARCHAR(128) NOT NULL,
    Price VARCHAR(128) NOT NULL,
    Quantity VARCHAR(128) NOT NULL,
    Image VARCHAR(128) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
CREATE TABLE userverify(
    uid INT(128) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Userinfo VARCHAR(128) NOT NULL,
    UserinfoCode VARCHAR(128) NOT NULL,
    User VARCHAR(128) NOT NULL,
    UserCode VARCHAR(128) NOT NULL,
    Number VARCHAR(128) NOT NULL,
    Email VARCHAR(128) NOT NULL,
    Gender VARCHAR(128) NOT NULL,
    Password VARCHAR(128) NOT NULL,
    userSelector VARCHAR(128) NOT NULL,
    userToken VARCHAR(128) NOT NULL,
    userExpire VARCHAR(128) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
CREATE TABLE resetpwd(
    rstId INT(128) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    rstEmail VARCHAR(128) NOT NULL,
    rstSelector VARCHAR(128) NOT NULL,
    rstToken VARCHAR(128) NOT NULL,
    rstExpire VARCHAR(128) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);



*/
