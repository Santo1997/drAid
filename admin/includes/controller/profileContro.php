<?php

class profileContro extends profileCls {

  protected $usertbl;
  protected $user;
  protected $dsName;
  protected $num;
  protected $mail;
  protected $gender;
  protected $religious;
  protected $eduIns;
  protected $eduDeg;
  protected $wts;
  protected $usercode;

  function __construct($usertbl,$user,$dsName,$num,$mail,$gender,$religious,$eduIns,$eduDeg,$wts,$usercode){

    $this->usertbl = $usertbl;
    $this->user = $user;
    $this->dsName = $dsName;
    $this->num = $num;
    $this->mail = $mail;
    $this->gender = $gender;
    $this->religious = $religious;
    $this->eduIns = $eduIns;
    $this->eduDeg = $eduDeg;
    $this->wts = $wts;
    $this->usercode = $usercode;

  }

  public function proUpdateReq(){

    if ($this->emptyField() == false) {
      redirect("../signup.php?id=".$this->usercode."&error=emptyField");
    }


    if ($this->validEmail() == false) {
      redirect("../signup.php?id=".$this->usercode."&error=invalidEmail");
    }


    $this->setProfile($this->usertbl,$this->user,$this->dsName,$this->num,$this->mail,$this->gender,$this->religious,$this->eduIns,$this->eduDeg,$this->wts,$this->usercode);
  }

  protected function emptyField(){
    $results;
    if (empty($this->usertbl) || empty($this->user) || empty($this->dsName) || empty($this->num) ||
        empty($this->mail) || empty($this->gender) || empty($this->religious) || empty($this->eduIns) ||
        empty($this->eduDeg) || empty($this->wts) || empty($this->usercode) ) {

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

}
