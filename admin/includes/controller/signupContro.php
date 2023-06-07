<?php

class signupContro extends signupCls {

  protected $signupID;
  protected $businessID;
  protected $businessCode;
  protected $user;
  protected $userCode;
  protected $num;
  protected $mail;
  protected $gender;
  protected $pwd;
  protected $rpwd;
  protected $selector;
  protected $token;
  protected $expire;

  function __construct($signupID, $businessID, $businessCode, $user, $userCode, $num, $mail, $gender, $pwd, $rpwd, $selector, $token, $expire){
    $this->signupID = $signupID;
    $this->businessID = $businessID;
    $this->businessCode = $businessCode;
    $this->user = $user;
    $this->userCode = $userCode;
    $this->num = $num;
    $this->mail = $mail;
    $this->gender = $gender;
    $this->pwd = $pwd;
    $this->rpwd = $rpwd;
    $this->selector = $selector;
    $this->token = $token;
    $this->expire = $expire;
  }

  public function signupReq(){

    if ($this->emptyField() == false) {
      redirect("../signup.php?id=".$this->signupID."&error=emptyField");
    }

    if ($this->validPwd() == false) {
      redirect("../signup.php?id=".$this->signupID."&error=invalidPwdFormat");
    }

    if ($this->validEmail() == false) {
      redirect("../signup.php?id=".$this->signupID."&error=invalidEmail");
    }
 
    if ($this->matchPwd() == false) {
      redirect("../signup.php?id=".$this->signupID."&error=wrongPwd");
    }

    if ($this->signupID === 'personal') {
      if ($this->userIDcheck() == false) {
        redirect("../signup.php?id=".$this->signupID."&error=userIDExist");
      }
    }

    if ($this->signupID === 'business' || $this->signupID === 'employee') {
      if ($this->tblcheck() == false) {
        if ($this->usertblcheck() == false) {
          redirect("../signup.php?id=".$this->signupID."&error=DatabaseIDExist2");
        }
      }
    }

    $this->setTokenUser($this->businessID, $this->businessCode, $this->user, $this->userCode, $this->num, $this->mail, $this->gender, $this->pwd, $this->selector, $this->token, $this->expire);

  }

  protected function emptyField(){
    $results;
    if (empty($this->signupID) || empty($this->businessID) || empty($this->businessCode) || empty($this->user) ||
        empty($this->userCode) || empty($this->num) || empty($this->mail) || empty($this->gender) || empty($this->pwd) ||
        empty($this->rpwd) || empty($this->selector) || empty($this->token) || empty($this->expire) ) {
      $results = false;
    }else {
      $results = true;
    }
    return $results;
  }

  protected function validPwd() {
    $results;
    if (!preg_match("/^['a-zA-Z0-9']{6,10}$/", $this->pwd)) {
      $results = false;
    }else {
      $results = true;
    }
    return $results;
  }

  protected function validEmail() {
    $results;
    if (!filter_var($this->mail, FILTER_VALIDATE_EMAIL)) {
      $results = false;
    }else {
      $results = true;
    }
    return $results;
  }

  protected function matchPwd() {
    $results;
    if ($this->pwd !==$this->rpwd) {
      $results = false;
    }else {
      $results = true;
    }
    return $results;
  }

  protected function userIDcheck() {
    $results;
      if (!$this->userExist($this->mail)) {
        $results = false;
      }else {
        $results = true;
      }
    return $results;
  }

  protected function tblcheck() {
    $results;
      if (!$this->tblExist($this->businessID, $this->businessCode)) {
        $results = false;
      }else {
        $results = true;
      }
    return $results;
  }

  protected function usertblcheck() {
    $results;
      if (!$this->tblUserExist($this->businessID,$this->mail)) {
        $results = false;
      }else {
        $results = true;
      }
    return $results;
  }

  protected function verifycheck() {
    $results;
    if (!$this->usercheck($this->mail)) {
      $results = false;
    }else {
      $results = true;
    }
    return $results;
  }

}
