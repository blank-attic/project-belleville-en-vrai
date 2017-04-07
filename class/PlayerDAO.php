<?php

class PlayerDAO {

    //save in db
    public function save($db, $player) {

        //prepare request
        $request = $db->prepare("INSERT INTO player (name, tel, bdate, team_id, team_leader) VALUES (:name, :tel, :bdate, :team_id, :team_leader)");

        //execute request
        try {
            $request->execute(array(
                "team_id" => $player->getTeamId(),
                "name" => $player->getName(),
                "tel" => $player->getTel(),
                "bdate" => $player->getDate(),
                "team_leader" => $player->getTeamLeader(),
            ));
        } catch (PDOException $e) {
            print("error while writing in DB new player." . $e->getMessage());
            return false;
        }
        return true;
    }

    public function find($db, $team_id, $name, $tel, $bdate, $team_leader) {

        //prepare request
        $request = $db->prepare("SELECT * FROM player WHERE (team_id = :team_id) AND (name = :name) AND (tel = :tel) AND (bdate = :bdate) AND (team_leader = :team_leader) LIMIT 1");

        //execute request
        try {
            $request->execute(array(
                "team_id" => $team_id,
                "name" => $name,
                "tel" => $tel,
                "bdate" => $bdate,
                "team_leader" => $team_leader
            ));

            return $request->fetch();
        } catch (PDOException $e) {
            print("error while writing in DB new player." . $e->getMessage());
            return false;
        }
    }

    public function getAllPlayersAndTeam($db) {
        //prepare request
        $request = $db->prepare("SELECT * FROM team t JOIN player p where p.team_id = t.id");

        //execute request
        try {
            $request->execute();
            return $request->fetchAll();
        } catch (PDOException $e) {
            print("error while writing in DB new player ." . $e->getMessage());
            return false;
        }
    }

    public function getPlayersInTeam($db, $team_id) {
      $request = $db->prepare("SELECT * FROM player");

      try {
          $request->execute();
          return $request->fetchAll();
      } catch (PDOException $e) {
          print("error while writing in DB new player in team." . $e->getMessage());
          return false;
      }
    }
}

?>
