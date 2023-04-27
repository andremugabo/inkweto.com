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
        $sql = "SELECT * FROM user WHERE users.u_phone = ? AND users.u_fname = ? AND users.u_lname = ?";
        $statement = $this->connect()->prepare($sql);
        $statement->execute(array(
            $phone,
            $fname,
            $lname
        ));
        $result = $statement->fetch();
        return $result;
    }

    public function insertUser($u_reg,$u_fname,$u_lname,$u_gid,$u_phone,$u_password,$u_role){
        $sql = "INSERT INTO USERS(u_reg,u_fname,u_lname,u_gid,u_phone,u_password,u_role) VALUES(?,?,?,?,?,?,?)";
        $statement = $this->connect()->prepare($sql);
        $statement->execute(array(
            $u_reg,
            $u_fname,
            $u_lname,
            $u_gid,
            $u_phone,
            $u_password,
            $u_role
        ));

    }






}
?>