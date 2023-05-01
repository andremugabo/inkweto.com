<?php

require_once "db.php";
class usersModel extends db{

    public function selectActiveUsers(){
        $sql = "SELECT * FROM users WHERE users.u_status = '1'";
        $statement = $this->connect()->prepare($sql);
        $statement->execute();

        while($result = $statement->fetchAll(PDO::FETCH_ASSOC)){
            return $result;
        }
    }

    public function login($username,$password){
        $sql = "SELECT * FROM users WHERE users.u_phone = ? AND users.u_password = ? AND users.u_status = '1'";
        $statement = $this->connect()->prepare($sql);
        $statement->execute(array(
            $username,
            $password
        ));
        $result = $statement->rowCount();
        return $result;
    }

    public function selectLogged($username,$password){
        $sql = "SELECT * FROM users WHERE users.u_phone = ? AND users.u_password = ? AND users.u_status = '1'";
        $statement = $this->connect()->prepare($sql);
        $statement->execute(array(
            $username,
            $password
        ));
        $result = $statement->fetch();
        return $result;
    }
    
    public function countActiveUsers(){
        $sql = "SELECT *FROM users WHERE users.u_status = '1'";
        $statement = $this->connect()->prepare($sql);
        $statement->execute();
        $result = $statement->rowCount();
        return $result;
    }

    public function countAllUsers(){
        $sql = "SELECT *FROM users";
        $statement = $this->connect()->prepare($sql);
        $statement->execute();
        $result = $statement->rowCount();
        return $result;
    }

    public function selectOneUser($id){
        $sql = "SELECT * FROM users WHERE users.u_id = ? AND users.u_status ='1'";
        $statement = $this->connect()->prepare($sql);
        $statement->execute(array(
            $id 
        ));
        $result = $statement->fetch();
        return $result;
    }

    public function checkIfUserExist($phone,$fname,$lname){
        $sql = "SELECT * FROM users WHERE users.u_phone = ? AND users.u_fname = ? AND users.u_lname = ?";
        $statement = $this->connect()->prepare($sql);
        $statement->execute(array(
            $phone,
            $fname,
            $lname
        ));
        $result = $statement->rowCount();
        return $result;
    }

    public function checkIfSellerExist($phone,$u_role){
        $sql = "SELECT * FROM users WHERE users.u_phone = ?  AND users.u_role = ?";
        $statement = $this->connect()->prepare($sql);
        $statement->execute(array(
            $phone,
            $u_role
        ));
        $result = $statement->rowCount();
        return $result;
    }


    public function checkIfSellerCanLog($phone,$password,$u_role){
        $sql = "SELECT * FROM users WHERE users.u_phone = ? AND users.u_password = ?  AND users.u_role = ?";
        $statement = $this->connect()->prepare($sql);
        $statement->execute(array(
            $phone,
            $password,
            $u_role
        ));
        $result = $statement->rowCount();
        return $result;
    }


    public function checkIfSellerCanLogged($phone,$password,$u_role){
        $sql = "SELECT users.*, gender.* FROM users JOIN gender ON users.g_id = gender.g_id WHERE users.u_phone = ? AND users.u_password = ?  AND users.u_role = ? AND users.u_status = 1";
        $statement = $this->connect()->prepare($sql);
        $statement->execute(array(
            $phone,
            $password,
            $u_role
        ));
        $result = $statement->fetch();
        return $result;
    }

    public function getId($phone,$u_role){
        $sql = "SELECT u_id FROM users WHERE users.u_phone = ?  AND users.u_role = ?";
        $statement = $this->connect()->prepare($sql);
        $statement->execute(array(
            $phone,
            $u_role
        ));
        $result = $statement->fetch();
        return $result;
    }

    public function insertUser($u_reg,$u_fname,$u_lname,$g_id,$u_phone,$u_password,$u_role){
        $sql = "INSERT INTO USERS(u_reg,u_fname,u_lname,g_id,u_phone,u_password,u_role) VALUES(?,?,?,?,?,?,?)";
        $statement = $this->connect()->prepare($sql);
        $statement->execute(array(
            $u_reg,
            $u_fname,
            $u_lname,
            $g_id,
            $u_phone,
            $u_password,
            $u_role
        ));

    }






}
?>