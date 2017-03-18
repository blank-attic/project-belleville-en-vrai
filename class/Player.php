<?php

class Player {

  private $team_id;
  private $player_name;
  private $player_tel;
  private $player_date;
  private $player_number;


  public function __construct($team_id, $player_name, $player_tel, $player_date, $player_number) {
    $this->team_id = $team_id;
    $this->player_name = $player_name
    $this->player_tel = $player_tel;
    $this->player_date = $player_date;
    $this->player_number = $player_number;
  }


  public function getTeamId() {
    return $this->team_id;
  }

  public function getName() {
    return $this->player_name;
  }
  public function getTel() {
    return $this->player_tel;
  }

  public function getDate() {
    return $this->player_date;
  }

  public function getNumber() {
    return $this->player_number;
  }

  public function validate() {

    $errorArray = array();

    //player_name check
    if (empty($this->player_name)) {
      array_push($errorArray, "Il manque le nom du joueur ...");
    }

    //tel check
    if (empty($this->player_tel)) {
      array_push($errorArray, "Il manque le numéro de téléphone...");
    }

    //birthday date check
    if (empty($this->player_date)) {
      array_push($errorArray, "Il manque la date anniversaire...");
    }

    return $errorArray;
  }

}

?>
