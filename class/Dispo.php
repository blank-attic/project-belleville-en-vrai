<?php
require_once('BitwiseFlag.php');

class Dispo extends BitwiseFlag
{
  const FLAG_VENDREDI = 1; // BIT #1 of $flags has the value 1
  const FLAG_SAMEDIAM = 2;     // BIT #2 of $flags has the value 2
  const FLAG_SAMEDIPM = 4;     // BIT #3 of $flags has the value 4
  const FLAG_DIMANCHEAM = 8;      // BIT #4 of $flags has the value 8
  const FLAG_DIMANCHEPM = 16;      // BIT #8 of $flags has the value 16

  public function __construct($dispo) {
    parent::__construct();
    foreach($dispo as $key => $value) {
        $this->setFlag($value, TRUE);
    }
  }

  public function isVendredi(){
    return $this->isFlagSet(self::FLAG_VENDREDI);
  }

  public function isSamediAM(){
    return $this->isFlagSet(self::FLAG_SAMEDIAM);
  }

  public function isSamediPM(){
    return $this->isFlagSet(self::FLAG_SAMEDIPM);
  }

  public function isDimancheAM(){
    return $this->isFlagSet(self::FLAG_DIMANCHEAM);
  }

  public function isDimanchePM(){
    return $this->isFlagSet(self::FLAG_DIMANCHEPM);
  }


  public function setVendredi($value){
    $this->setFlag(self::FLAG_VENDREDI, $value);
  }

  public function setSamediAM($value){
    $this->setFlag(self::FLAG_SAMEDIAM, $value);
  }

  public function setSamediPM($value){
    $this->setFlag(self::FLAG_SAMEDIPM, $value);
  }

  public function setDimancheAM($value){
    $this->setFlag(self::FLAG_DIMANCHEAM, $value);
  }

  public function setDimanchePM($value){
    $this->setFlag(self::FLAG_DIMANCHEPM, $value);
  }

  public function getDispos() {
    $dispoTab = array('Vendredi' =>getflag(self::FLAG_VENDREDI),
    'SamediAM'=>getflag(self::FLAG_SAMEDIAM),
    'SamediPM'=>getflag(self::FLAG_SAMEDIPM),
    'DimancheAM'=>getflag(self::FLAG_DIMANCHEAM),
    'DimanchePM'=>getflag(self::FLAG_DIMANCHEPM));
    return $dispoTab;
  }

  public function __toString(){
    return $this->getDispo($dispo);
  }

}

?>
