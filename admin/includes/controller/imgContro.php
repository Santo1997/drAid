<?php

class imgContro extends imgCls {

  protected $usertbl;
  protected $usercode;
  protected $img;

  function __construct($usertbl, $usercode,$img){
    $this->usertbl = $usertbl;
    $this->usercode = $usercode;
    $this->img = $img;
  }

  public function proPicSet(){

    if ($this->emptyField() == false) {
      redirect("../profile.php?user=".$this->usercode."&error=emptyField");
    }

    $this->setProPic($this->usertbl, $this->usercode, $this->img);

  }

  protected function emptyField(){
    $results;
    if (empty($this->usertbl) || empty($this->usercode) || empty($this->img)) {
      $results = false;
    }else {
      $results = true;
    }
    return $results;
  }

}
