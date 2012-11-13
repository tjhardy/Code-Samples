<?php

class privateInfo {
  private $secretInfo = "Okay, now I have to kill you!";
  
  protected function getSecretInfo() {
    return $this->secretInfo;
  }
}

class agent007 extends privateInfo {
  public function snoop() {
    echo $this->getSecretInfo();
  }
}

$nosey = new agent007();
$nosey->snoop();
?>