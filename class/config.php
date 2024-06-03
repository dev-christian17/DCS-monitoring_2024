<?php

class config{
    private $username ='root';
    private $password = '';
    public  $pdo = null;

    public function con(){
        try{
            $this->pdo = new PDO('mysql:host=localhost;dbname=dcs_monitoring_db',$this->username,$this->password);
        }catch(PDOException $e){
            die($e->getMessage());
        }

        return $this->pdo;
    }
}

?>