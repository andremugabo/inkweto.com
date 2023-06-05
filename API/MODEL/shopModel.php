<?php
require_once "db.php";
class shopModel extends db{

    public function insertShop($u_id,$s_reg,$s_name,$s_logo){
        $sql = "INSERT INTO shop(u_id,s_reg,s_name,s_logo) VALUES(?,?,?,?)";
        $statement = $this->connect()->prepare($sql);
        $statement->execute(array(
            $u_id,
            $s_reg,
            $s_name,
            $s_logo
        ));

    }


    public function checkIfShopExist($u_id,$s_name){
        $sql = "SELECT * FROM shop WHERE shop.u_id = ? AND shop.s_name = ?";
        $statement = $this->connect()->prepare($sql);
        $statement->execute(array(
            $u_id,
            $s_name            
        ));
        $result = $statement->rowCount();
        return $result;
    }


    public function countAllUsers(){
        $sql = "SELECT * FROM shop";
        $statement = $this->connect()->prepare($sql);
        $statement->execute();
        $result = $statement->rowCount();
        return $result;
    }

    public function selectActiveShopOnUid($u_id){
        $sql = "SELECT shop.*,users.u_id,users.u_fname,users.u_lname FROM shop JOIN users ON shop.u_id = users.u_id WHERE shop.u_id = ? AND shop.s_status = 1";
        $statement = $this->connect()->prepare($sql);
        $statement->execute(array(
            $u_id
        ));

        while($result = $statement->fetchAll(PDO::FETCH_ASSOC)){
            return $result;
        }
    }



    public function selectActiveShop(){
        $sql = "SELECT shop.*,users.u_id,users.u_fname,users.u_lname FROM shop JOIN users ON shop.u_id = users.u_id WHERE  shop.s_status = 1";
        $statement = $this->connect()->prepare($sql);
        $statement->execute();

        while($result = $statement->fetchAll(PDO::FETCH_ASSOC)){
            return $result;
        }
    }


}
?>