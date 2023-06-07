<?php

class submitContro extends submitCls {

  protected $reqToken;
  protected $reqSelector;

  function __construct($reqToken,$reqSelector){
    $this->reqToken = $reqToken;
    $this->reqSelector = $reqSelector;
  }

  public function varifyReq(){

    if ($this->emptyField() == false) {
      redirect("../checkpoint.php?selector=".$this->reqSelector."&error=emptyField");
    }

    $this->validate($this->reqToken, $this->reqSelector);
  }

  protected function emptyField(){
    $results;
    if (empty($this->reqSelector)) {
      $results = false;
    }else {
      $results = true;
    }
    return $results;
  }

}
