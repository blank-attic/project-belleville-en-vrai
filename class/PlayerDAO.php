<?php

class PlayerDAO {

  //save in db
  public function save($db, $players) {

    //prepare request
    $request = $db->prepare("INSERT INTO player (team_id, player_name, player_tel, player_date, player_number) VALUES (:team_id, :player_name, :player_tel, :player_date, :player_number)");

    //execute request
    try {
      $request->execute(array(
        "team_id" => $player->getTeamId(),
        "player_name" => $player->getName(),
        "player_tel" => $player->getTel(),
        "player_date" => $player->getDate(),
        "player_number" => $player->getNumber()
      ));
    } catch (PDOException $e) {
      print("error while writing in DB new player." . $e->getMessage());
      return false;
    }
    return true;
    return $players
  }

  public function find($db, $team_id, $player_name, $player_tel, $player_number) {

    //prepare request
    $request = $db->prepare("SELECT * FROM player WHERE (team_id = :team_id) AND (player_name = :player_name) AND (player_tel = :player_tel) AND (player_number = :player_number) LIMIT 1");

    //execute request
    try {
      $request->execute(array(
        "team_id" => $team_id,
        "player_name" => $player_name,
        "player_tel" => $player_tel,
        "player_number" => $player_number
      ));
      return $request->fetch();
    } catch (PDOException $e) {
      print("error while writing in DB new volunteer." . $e->getMessage());
      return false;
    }
  }
}

 ?>
