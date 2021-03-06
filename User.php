<?php

require_once "DbConfig.php";

class User extends DbConfig{
    public function create($data){
        try{
            if($data['password'] != $data["conf-password"]){
                throw new Exception("Wachtwoorden komen niet overeen.");
            }
            $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
            $encryptedPassword = password_hash($data['password'], PASSWORD_BCRYPT, ['cost' => 12]);
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam(":username", $data['username']); //verbinden bij database
            $stmt->bindParam(":password", $encryptedPassword);
            if(!$stmt->execute()){
                throw new Exception("Account kon niet aangemaakt worden.");
            }
            header("Location: login.php");
        }catch (Exception $e){
            echo $e->getMessage();
        }
    }

    public function getUser($username){
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function getUsers(){
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }



    public function login($data){
        try {
            $user = $this->getUser($data['username']);
            if(!$user){
                throw new Exception("Gebruiker bestaat niet");
            }
            if(!password_verify($data["password"], $user->password)){
                throw new Exception("Wachtwoord is incorrect");
            }
            session_start();
            $_SESSION['ingelogd'] = true;
            $_SESSION['username'] = $user->username;
            $_SESSION['id'] = $user->id;
            header("Location: admincrud-system.php");
        }catch (Exception $e){
            echo $e->getMessage();
        }
    }

    public function urlForImage($id){
        return substr('0000' . $id, -5);
    }

}
?>