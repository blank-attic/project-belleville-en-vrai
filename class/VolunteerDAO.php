<?php


class VolunteerDAO {

    //save in db
    public function save($db, $volunteer) {
        //prepare request
        $request = $db->prepare("INSERT INTO benevole (prenom, nom, tel, email, dispo, tache, taille_tshirt, message) VALUES (:prenom, :nom, :tel, :email, :dispo, :tache, :tsize, :volmsg)");
        //execute request
        try {
            $data = array(
                "prenom" => $volunteer->getFirstname(),
                "nom" => $volunteer->getName(),
                "tel" => $volunteer->getTel(),
                "email" => $volunteer->getEmail(),
                "dispo" => $volunteer->getDispos()->getValue(),
                "tache" => $volunteer->getTask()->getValue(),
                "tsize" => $volunteer->getTsize(),
                "volmsg" => $volunteer->getVolmsg()
            );
            $request->execute($data);
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
        $request = $db->prepare("SELECT * FROM benevole WHERE (prenom = :prenom) AND (nom = :nom) AND (tel = :tel) LIMIT 1");

        //execute request
        try {
            $request->execute(array(
                "prenom" => $firstname,
                "nom" => $name,
                "tel" => $tel
            ));
            return $request->fetch();
        } catch (PDOException $e) {
            print("error while writing in DB new volunteer." . $e->getMessage());
            return false;
        }
    }

    public function getAll($db) {

        //prepare request
        $request = $db->prepare("SELECT * FROM benevole");

        //execute request
        try {
            $request->execute();
            return $request->fetchAll();
        } catch (PDOException $e) {
            print("error while writing in DB new volunteer." . $e->getMessage());
            return false;
        }
    }
}

?>
