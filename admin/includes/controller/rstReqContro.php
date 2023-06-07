<?php

class rstReqContro extends rstReqCls {


  protected $user;
  protected $tbl;
  protected $selector;
  protected $expire;

  function __construct($user,$tbl, $selector, $expire){

    $this->user = $user;
    $this->tbl = $tbl;
    $this->selector = $selector;
    $this->expire = $expire;
  }

  public function rstReq(){

    if ($this->emptyField() == false) {
      redirect("../index.php?error=emptyField");
    }

    if ($this->userExist() == true) {
      redirect("../index.php?error=stmtFail1");
    }

    if ($this->userExists() == false) {
      redirect("../index.php?error=stmtFail2");
    }




    $this->setRstToken($this->user,$this->tbl, $this->selector, $this->expire);
    return $this->maillAdd($this->tbl,$this->user);

  }

  protected function emptyField(){
    $results;
    if (empty($this->user) || empty($this->tbl) || empty($this->selector) ||  empty($this->expire) ) {
      $results = false;
    }else {
      $results = true;
    }
    return $results;
  }


  protected function userExist() {
    $results;
      if (!$this->tblUserExist($this->tbl,$this->user)) {
        $results = false;
      }else {
        $results = true;
      }
    return $results;
  }



  protected function userExists() {
    $results;
      if (!$this->usercheck($this->user)) {
        $results = false;
      }else {
        $results = true;
      }
    return $results;
  }




}
