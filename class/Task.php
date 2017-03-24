<?php
require_once('BitwiseFlag.php');

class Task extends BitwiseFlag
{
  const FLAG_ENCADREMENT_SPORTIF = 1; // BIT #1 of $flags has the value 1
  const FLAG_LOGISTIQUE = 2;     // BIT #2 of $flags has the value 2
  const FLAG_PHOTO = 4;     // BIT #3 of $flags has the value 4
  const FLAG_VIDEO = 8;      // BIT #4 of $flags has the value 8
  const FLAG_CUISINE = 16;      // BIT #8 of $flags has the value 16
  const FLAG_ACCEUIL_ARTISTE = 32;      // BIT #8 of $flags has the value 32
  const FLAG_ACCEUIL_PROPRETE = 64;      // BIT #8 of $flags has the value 64

  public function __construct($task) {
    parent::__construct();
    foreach($task as $key => $value) {
      $this->setFlag($value, TRUE);
    }
  }


  public function isEncadrementSportif(){
    return $this->isFlagSet(self::FLAG_ENCADREMENT_SPORTIF);
  }

  public function isLogistique(){
    return $this->isFlagSet(self::FLAG_LOGISTIQUE);
  }

  public function isPhoto(){
    return $this->isFlagSet(self::FLAG_PHOTO);
  }

  public function isVideo(){
    return $this->isFlagSet(self::FLAG_VIDEO);
  }

  public function isCuisine(){
    return $this->isFlagSet(self::FLAG_CUISINE);
  }

  public function isAccueilArtiste(){
    return $this->isFlagSet(self::FLAG_ACCEUIL_ARTISTE);
  }

  public function isAccueilProprete(){
    return $this->isFlagSet(self::FLAG_ACCEUIL_PROPRETE);
  }


  public function setEncadrementSportif($value){
    $this->setFlag(self::FLAG_ENCADREMENT_SPORTIF, $value);
  }

  public function setLogistique($value){
    $this->setFlag(self::FLAG_LOGISTIQUE, $value);
  }

  public function setPhoto($value){
    $this->setFlag(self::FLAG_PHOTO, $value);
  }

  public function setVideo($value){
    $this->setFlag(self::FLAG_VIDEO, $value);
  }

  public function setCuisine($value){
    $this->setFlag(self::FLAG_CUISINE, $value);
  }

  public function setAcceuilArtiste($value){
    $this->setFlag(self::FLAG_ACCEUIL_ARTISTE, $value);
  }

  public function setAcceuilProprete($value){
    $this->setFlag(self::FLAG_ACCEUIL_PROPRETE, $value);
  }

  public function getTask() {
    $taskTab = array('Encadrement Sportif' =>getflag(self::FLAG_ENCADREMENT_SPORTIF),
    'Logistique'=>getflag(self::FLAG_LOGISTIQUE),
    'Photo'=>getflag(self::FLAG_PHOTO),
    'Video'=>getflag(self::FLAG_VIDEO),
    'Cuisine'=>getflag(self::FLAG_CUISINE),
    'Acceuil Artiste'=>getflag(self::FLAG_ACCEUIL_ARTISTE),
    'Acceuil Propreté'=>getflag(self::FLAG_ACCEUIL_PROPRETE));
  }

  public function __toString(){
    return $this->getTask();

  }
}
?>
