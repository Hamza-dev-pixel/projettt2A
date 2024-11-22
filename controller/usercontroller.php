<?php
include(__DIR__ . '/../database.php');
include(__DIR__ . '/../model/user.php');

class userController
{
    public function listUser()
    {
        $sql = "SELECT * FROM user";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteUser($id)
    {
        $sql = "DELETE FROM user WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addUser($offer)
    {   var_dump($offer);
        $sql = "INSERT INTO user  
        VALUES (NULL, :nom_utilisateur,:date_naissance, :email,:mdp, :role)";
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'nom_utilisateur' => $offer->getNom(),
                'date_naissance' => $offer->getDate()->format('Y-m-d'),
                'email' => $offer->getEmail(), 
                'mdp' => $offer->getMDP(),
                'role' => $offer->getRole()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateUser($offer, $id)
{
    var_dump($offer);
    try {
        $db = config::getConnexion();

        $query = $db->prepare(
            'UPDATE user SET 
                nom_utilisateur = :nom_utilisateur,
                date_naissance = :date_naissance,
                email = :email,
                mdp = :mdp,
                role = :role
            WHERE id = :id'
        );

        $query->execute([
            'id' => $id,
            'nom_utilisateur' => $offer->getNom(),
            'date_naissance' => $offer->getDate()->format('Y-m-d'),
            'email' => $offer->getEmail(), 
            'mdp' => $offer->getMDP(),
            'role' => $offer->getRole()
        ]);

        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage(); 
    }
}


    function showUser($id)
    {
        $sql = "SELECT * from user where id = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $offer = $query->fetch();
            return $offer;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
