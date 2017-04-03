<?php


class ParticipationDAO {

  //save in db
  public function save($db, $parti) {
    //prepare request
    $request = $db->prepare("INSERT INTO artistes (nom, contact, email, tel, discipline, participants, description, dejapresenteoupas, lien) VALUES (:nom, :contact, :email, :tel, :discipline, :participants, :description, :dejapresenteoupas, :lien)");
    //execute request
    try {
      $data = array(
        "nom" => $parti->getNom(),
        "contact" => $parti->getContact(),
        "email" => $parti->getEmail(),
        "tel" => $parti->getTel(),
        "discipline" => $parti->getDiscipline(),
        "participants" => $parti->getParticipants(),
        "description" => $parti->getArtprojet(),
        "dejapresenteoupas" => $parti->getArtprojet2(),
        "lien" => $parti->getLien(),
      );
      $request->execute($data);
    } catch (PDOException $e) {
      print("error while writing in DB new user." . $e->getMessage());
      return false;
    }

    return true;
  }

  public function find($db, $nom, $email, $tel) {

    //prepare request
    $request = $db->prepare("SELECT * FROM artistes WHERE (nom = :nom) AND ( email = :email) AND (tel = :tel) LIMIT 1");

    //execute request
    try {
      $request->execute(array(
        "nom" => $nom,
        "email" => $email,
        "tel" => $tel,
      ));
      return $request->fetch();
    } catch (PDOException $e) {
      print("error while writing in DB new artiste." . $e->getMessage());
      return false;
    }
  }
}

 ?>
