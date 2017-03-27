<?php

class Participation {

  private $email;
  private $nom;
  private $contact;
  private $telart;
  private $participants;
  private $discipline;
  private $artprojet;
  private $artprojet2;
  private $lien;

  public function __construct($email, $nom, $contact, $tel, $participants, $discipline, $artprojet, $artprojet2, $lien) {
    $this->email = $email;
    $this->nom = $nom;
    $this->contact = $contact;
    $this->tel = $tel;
    $this->participants = $participants;
    $this->discipline = $discipline;
    $this->artprojet = $artprojet;
    $this->artprojet2 = $artprojet2;
    $this->lien = $lien;
  }


  public function getEmail() {
    return $this->email;
  }

  public function getNom() {
    return $this->nom;
  }
  public function getContact() {
    return $this->contact;
  }

  public function getTel() {
    return $this->tel;
  }

  public function getParticipants() {
    return $this->participants;
  }

  public function getDiscipline() {
    return $this->discipline;
  }


  public function getArtprojet() {
    return $this->artprojet;
  }

  public function getArtprojet2() {
    return $this->artprojet2;
  }

  public function getLien() {
    return $this->lien;
  }

  public function validate() {

    $errorArray = array();

    //artiste check
    if (empty($this->nom)) {
      array_push($errorArray, "Il manque ton nom d'artiste ou de groupe ");
    }

    //contact  check
    if (empty($this->contact)) {
      array_push($errorArray, "Il manque le nom de ton contact...");
    }

    //tel check
    if (empty($this->tel)) {
      array_push($errorArray, "Il manque ton Numéro de téléphone...");
    }

    //email check
    if (empty($this->email)) {
      array_push($errorArray, "Il manque ton e-mail...");
    }

    //discipline check
    if (empty($this->discipline)) {
      array_push($errorArray, "Il manque la discipline artistique...");
    }

    //participants check
    if (empty($this->participants)) {
      array_push($errorArray, "vous etes combien a monter sur scène ?...");
    }


    if (filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false) {
      array_push($errorArray, "Vérifies ton e-mail s'il te plaît..." . $this->email . " ");
    }

    return $errorArray;
  }

}

?>
