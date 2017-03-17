<?php

class PlayerDAO {

  //save in db
  public function save($db, $players) {

    //prepare request



    //execute request
    $request = $db->prepare("INSERT INTO player (team_id,player_name,player_tel,player_date,player_number) VALUES (:team_id, :name,:tel,:birth_date,:player_number)");

    try {
      $request->execute(array(
        "team_id" => $player->getTeamId(),
        "player_name" => $player->getName(),
        "tel" => $player->getTel(),
        "email" => $player->getDate(),
        "dispo" => $player->getNumber()
      ));
    } catch (PDOException $e) {
      print("error while writing in DB new player." . $e->getMessage());
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

  public function find($db, $team_id, $player_name, $player_tel, $player_number) {

    //prepare request
    $request = $db->prepare("SELECT * FROM player WHERE (player_name = :player_name) AND (team_id = :team_id) AND (player_tel = :player_tel) AND (player_number = :player_number) LIMIT 1");

    //execute request
    try {
      $request->execute(array(
        "player_name" => $player_name,
        "player_tel" => $name,
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
