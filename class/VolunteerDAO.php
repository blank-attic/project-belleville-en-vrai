<?php

class VolunteerDAO {

  //save in db
  public function save($db, $volunteer) {

    //prepare request
    $request = $db->prepare("INSERT INTO benevole (prenom, nom, tel, email, dispo, tache, taille_tshirt, message) VALUES (:firstname, :name, :tel, :email, :dispo, :tache, :tsize, :volmsg)");

    //execute request
    try {
      $request->execute(array(
        "firstname" => $volunteer->getFirstname(),
        "name" => $volunteer->getName(),
        "tel" => $volunteer->getTel(),
        "email" => $volunteer->getEmail(),
        "dispo" => $volunteer->getDispo(),
        "task" => $volunteer->getTask(),
        "tsize" => $volunteer->getTsize(),
        "volmsg" => $volunteer->getVolmsg()
      ));
    } catch (PDOException $e) {
      print("error while writing in DB new user." . $e->getMessage());
      return false;
    }

    return true;
  }

  // public function auth($db, $username, $password, $email) {
  //   //retrieve user from db with same username
  //   $user = $this->find($db, $username);
  //
  //   //check email & password matching
  //   if ($user["email"] == $email &&
  //       $user["password"] == $password) {
  //         //login
  //         return true;
  //   }
  //
  //   //oops error
  //   return false;
  // }

  public function find($db, $firstname, $name, $tel) {

    //prepare request
    $request = $db->prepare("SELECT * FROM benevole WHERE (firstname = :firstname) AND (name = :name) AND (tel = :tel) LIMIT 1");

    //execute request
    try {
      $request->execute(array(
        "firstname" => $firstname,
        "name" => $name,
        "tel" => $tel
      ));
      return $request->fetch();
    } catch (PDOException $e) {
      print("error while writing in DB new volunteer." . $e->getMessage());
      return false;
    }
  }
}

 ?>
