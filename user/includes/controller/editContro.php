<?php

class editContro extends editCls {
  protected $editID;
  protected $tbl;
  protected $setUser;
  protected $metUser;
  protected $metMail;
  protected $metnum;
  protected $metDate;
  protected $metTime;
  protected $metType;
  protected $metHed;
  protected $metDeta;

  function __construct($editID, $tbl, $setUser, $metUser, $metMail,$metnum,$metDate, $metTime, $metType, $metHed, $metDeta){
    $this->editID = $editID;
    $this->tbl = $tbl;
    $this->setUser = $setUser;
    $this->metUser = $metUser;
    $this->metMail = $metMail;
    $this->metnum = $metnum;
    $this->metDate = $metDate;
    $this->metTime = $metTime;
    $this->metType = $metType;
    $this->metHed = $metHed;
    $this->metDeta = $metDeta;

  }

  public function editReq(){

    if ($this->emptyField() == false) {
      redirect("../editing.php?id=".$editID."error=emptyField");
    }

    if ($this->validEmail() == false) {
      redirect("../editing.php?id=".$editID."error=invalidEmail");
    }

    $this->editUpdate($this->editID, $this->tbl, $this->setUser, $this->metUser, $this->metMail,$this->metnum, $this->metDate, $this->metTime, $this->metType, $this->metHed, $this->metDeta);

  }

  protected function emptyField(){
    $results;
    if (empty($this->editID) || empty($this->tbl) || empty($this->setUser) || empty($this->metUser) || empty($this->metMail) ||
        empty($this->metnum) || empty($this->metDate) || empty($this->metTime) || empty($this->metType) || empty($this->metHed) ) {
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


}
