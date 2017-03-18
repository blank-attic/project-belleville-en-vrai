<?php

class Team {

  private $teamname;
  private $categorie;
  private $quartier;
  private $refname;
  private $natation;
  private $course;
  private $pingpong;


  public function __construct($teamname, $categorie, $quartier, $refname, $natation, $course, $pingpong) {
    $this->teamname = $teamname;
    $this->categorie = $categorie;
    $this->quartier = $quartier;
    $this->refname = $refname;
    $this->natation = $natation;
    $this->course = $course;
    $this->pingpong = $pingpong;
  }


  public function getTeamname() {
    return $this->teamname;
  }

  public function getCategorie() {
    return $this->categorie;
  }
  public function getQuartier() {
    return $this->quartier;
  }

  public function getRefname() {
    return $this->refname;
  }

  public function getNatation() {
    return $this->natation;
  }
  public function getCourse() {
    return $this->course;
  }

  public function getPingPong() {
    return $this->pingpong;
  }


  public function validate() {

    $errorArray = array();

    //team name check
    if (empty($this->teamname)) {
      array_push($errorArray, "Il manque le nom de ton équipe...");
    }

    //categorie check
    if (empty($this->categorie)) {
      array_push($errorArray, "Il manque ta catégorie...");
    }

    //quartier check
    if (empty($this->quartier)) {
      array_push($errorArray, "Il manque la nom de ton quartier...");
    }

    //referent check
    if (empty($this->refname)) {
      array_push($errorArray, "Il manque le nom du grand de ton quartier, ton référent...");
    }

    //natation check
    if (empty($this->natation)) {
      array_push($errorArray, "Il manque un ou des nageurs...");
    }

    //course check
    if (empty($this->course)) {
      array_push($errorArray, "Il manque un ou des coureurs...");
    }

    //ping-pong check
    if (empty($this->pingpong)) {
      array_push($errorArray, "Il manque un ou des joueurs de ping-pong...");
    }

    return $errorArray;
  }
}

?>
