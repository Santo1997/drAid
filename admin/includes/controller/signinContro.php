<?php

class signinContro extends signinCls {


  protected $user;
  protected $pwd;


  function __construct($user, $pwd){

    $this->user = $user; 
    $this->pwd = $pwd;

  }

  public function signin(){

    if ($this->emptyField() == false) {
      redirect("../signup.php?id=".$this->signupID."&error=emptyField");
    }

    if ($this->validPwd() == false) {
      redirect("../signup.php?id=".$this->signupID."&error=invalidPwdFormat");
    }

    $this->getUser($this->user, $this->pwd);

  }

  protected function emptyField(){
    $results;
    if (empty($this->user) || empty($this->pwd)) {
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




}
