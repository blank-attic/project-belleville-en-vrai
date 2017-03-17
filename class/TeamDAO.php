<?php

class TeamDAO {

  //save in db
  public function save($db, $team) {

    //prepare request
    $request = $db->prepare("INSERT INTO team (teamname, categorie, quartier, refname) VALUES (:teamname, :categorie, :quartier, :refname)");

    //execute request
    try {
      $request->execute(array(
        "teamname" => $team->getTeamname(),
        "categorie" => $team->getCategorie(),
        "quartier" => $team->getQuartier(),
        "refname" => $team->getRefname(),

      ));
    } catch (PDOException $e) {
      print("error while writing in DB new team." . $e->getMessage());
      return false;
    }

    return true;
  }

  public function find($db, $teamname) {

    //prepare request
    $request = $db->prepare("SELECT * FROM team WHERE (teamname = :teamname) LIMIT 1");

    //execute request
    try {
      $request->execute(array(
        "teamname" => $teamname,
      ));
      return $request->fetch();
    } catch (PDOException $e) {
      print("error while writing in DB new team." . $e->getMessage());
      return false;
    }
  }
}

 ?>
