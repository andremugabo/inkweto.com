<?php
require_once"db.class.php.php";
class metricModel extends db{

    public function selectMetric(){
        $sql = "SELECT * FROM metric";
        $statement = $this->connect()->prepare($sql);
        $statement->execute();
        while($result = $statement->fetchAll(PDO::FETCH_ASSOC)){
            return $result;
        }
    }

    public function insertMetric($m_uid,$m_name){
        $sql = "INSERT INTO metric(m_uid,m_name) VALUES(?,?)";
        $statement = $this->connect()->prepare($sql);
        $statement->execute(array(
            $m_uid,
            $m_name
        ));
    }
}