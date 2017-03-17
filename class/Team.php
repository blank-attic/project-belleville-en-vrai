<?php

class Team {

  private $teamname;
  private $categorie;
  private $quartier;
  private $refname;


  public function __construct($teamname, $categorie, $quartier, $refname) {
    $this->teamname = $teamname;
    $this->categorie = $categorie;
    $this->quartier = $quartier;
    $this->refname = $refname;
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


  public function validate() {

    $errorArray = array();

    //firstname check
    if (empty($this->teamname)) {
      array_push($errorArray, "Il manque le nom de ton équipe...");
    }

    //name check
    if (empty($this->categorie)) {
      array_push($errorArray, "Il manque ta catégorie...");
    }

    //tel check
    if (empty($this->quartier)) {
      array_push($errorArray, "Il manque la nom de ton quartier...");
    }

    //email check
    if (empty($this->refname)) {
      array_push($errorArray, "Il manque le nom du grand de ton quartier, ton référent...");
    }

    return $errorArray;
  }

}

?>
