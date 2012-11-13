<?php

class privateInfo {
  private $secretInfo = "This info is PRIVATE!!!!";
  
  protected function getSecretInfo() {
    return $this->secretInfo;
  }
}

$nosey = new privateInfo();
$nosey->getSecretInfo();
?>