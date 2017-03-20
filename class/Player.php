<?php

class Player {

  private $team_id;
  private $name;
  private $tel;
  private $bdate;
  private $team_leader;



  public function __construct($name, $tel, $bdate) {
    // $this->team_id = $team_id;
    $this->name = $name;
    $this->tel = $tel;
    $this->bdate = $bdate;
    // $this->team_leader = $team_leader;
  }


  public function getTeamId() {
    return $this->team_id;
  }

  public function setTeamId($team_id){
    $this ->team_id = $team_id;
  }

  public function getName() {
    return $this->name;
  }
  public function getTel() {
    return $this->tel;
  }

  public function getDate() {
    return $this->bdate;
  }

  public function getTeamLeader() {
    return $this->team_leader;
  }

  public function setTeamLeader($team_leader){
    $this ->team_leader = $team_leader;
  }

  public function __toString() {
    echo "id : " . $this->getTeamId() . " // " .
         "name : " . $this->getName() . " // " .
         "tel : " . $this->getTel() . " // " .
         "bdate : " . $this->getDate() . " // " .
         "teamLeader : " . $this->getTeamLeader();
  }

  public function validate() {

    $errorArray = array();

    //player name check
    if (empty($this->name)) {
      array_push($errorArray, "Il manque un nom du joueur ...");
    }

    //tel check
    if (empty($this->tel)) {
      array_push($errorArray, "Il manque un numéro de téléphone...");
    }

    //birthday date check
    if (empty($this->bdate)) {
      array_push($errorArray, "Il manque un date anniversaire...");
    }

    return $errorArray;
  }

}

?>
