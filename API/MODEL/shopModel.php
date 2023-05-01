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
        $sql = "SELECT *FROM shop";
        $statement = $this->connect()->prepare($sql);
        $statement->execute();
        $result = $statement->rowCount();
        return $result;
    }


}
?>