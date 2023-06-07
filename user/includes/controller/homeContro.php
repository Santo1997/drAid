<?php

class homeContro extends homeCls {

  protected $setUser;
  protected $setTbl;
  protected $metUser;
  protected $metMail;
  protected $metNum;
  protected $metDate;
  protected $metTime;
  protected $metType;
  protected $metHed;
  protected $metDeta;
  protected $expireDate;

  function __construct($setUser, $setTbl, $metUser, $metMail, $metNum, $metDate, $metTime, $metType, $metHed, $metDeta,$expireDate){
    $this->setUser = $setUser;
    $this->setTbl = $setTbl;
    $this->metUser = $metUser;
    $this->metMail = $metMail;
    $this->metNum = $metNum;
    $this->metDate = $metDate;
    $this->metTime = $metTime;
    $this->metType = $metType;
    $this->metHed = $metHed;
    $this->metDeta = $metDeta;
    $this->expireDate = $expireDate;

  }

  public function homeReq(){

    if ($this->emptyField() == false) {
      redirect("../home.php?error=emptyField");
    }

    if ($this->validEmail() == false) {
      redirect("../home.php?error=invalidEmail");
    }

    if ($this->userNumcheck() == false) {
      redirect("../home.php?error=userNumExist");
    }

    if ($this->userEmailcheck() == false) {
      redirect("../home.php?error=userEmailExist");
    }

    $this->setMeeting($this->setUser,$this->setTbl, $this->metUser, $this->metMail, $this->metNum, $this->metDate, $this->metTime, $this->metType, $this->metHed, $this->metDeta,$this->expireDate);

  }

  protected function emptyField(){
    $results;
    if (empty($this->setUser) || empty($this->setTbl) || empty($this->metUser) || empty($this->metMail) || empty($this->metNum) ||
        empty($this->metDate) || empty($this->metTime) || empty($this->metType) || empty($this->metHed) || empty($this->expireDate) ) {
      $results = false;
    }else {
      $results = true;
    }
    return $results;
  }

  protected function validEmail() {
    $results;
    if (!filter_var($this->metMail, FILTER_VALIDATE_EMAIL)) {
      $results = false;
    }else {
      $results = true;
    }
    return $results;
  }

  protected function userNumcheck() {
    $results;
      if (!$this->userNumExist($this->metNum)) {
        $results = false;
      }else {
        $results = true;
      }
    return $results;
  }

  protected function userEmailcheck() {
    $results;
      if (!$this->userMailExist($this->metMail)) {
        $results = false;
      }else {
        $results = true;
      }
    return $results;
  }


}
