<?php

class resetContro extends resetCls {

  protected $pwd;
  protected $rpwd;
  protected $reqSelector;

  function __construct($pwd,$rpwd,$reqSelector){
    $this->pwd = $pwd;
    $this->rpwd = $rpwd;
    $this->reqSelector = $reqSelector;
  }

  public function varifyReq(){

    if ($this->emptyField() == false) {
      redirect("../resetpoint.php?selector=".$this->reqSelector."&error=emptyField");
    }
    if ($this->validPwd() == false) {
      redirect("../resetpoint.php?selector=".$this->reqSelector."&error=invalidPwdFormat");
    }
    if ($this->matchPwd() == false) {
      redirect("../resetpoint.php?selector=".$this->reqSelector."&error=wrongPwd");
    }



    $this->validate($this->pwd, $this->reqSelector);
  } 

  protected function emptyField(){
    $results;
    if (empty($this->pwd) || empty($this->rpwd) || empty($this->reqSelector)) {
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

  protected function matchPwd() {
    $results;
    if ($this->pwd !==$this->rpwd) {
      $results = false;
    }else {
      $results = true;
    }
    return $results;
  }

}
