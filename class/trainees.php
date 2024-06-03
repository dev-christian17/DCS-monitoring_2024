<?php

class trainees extends config{
   
    public $username;
    public $fullname;
    public $email;
    public $password;

    public function __construct($username = null, $fullname = null, $email = null, $password = null) {
        $this->username = $username;
        $this->fullname = $fullname;
        $this->email = $email;
        $this->password = $password;
    }

    public function insertTrainees(){
        $con = $this->con();
        $sql = "INSERT INTO `tbl_user`(`username`,`fullname`,`email`,`password`) VALUES (:username, :fullname, :email, :password)";
        $data = $con->prepare($sql);
        $data->bindParam(':username', $this->username);
        $data->bindParam(':fullname', $this->fullname);
        $data->bindParam(':email', $this->email);
        $data->bindParam(':password', $this->password);
        if($data->execute()){
            return true;
        } else {
            return false;
            return false;
        }
    }

    public function viewList(){
        $con = $this->con();
        $sql = "SELECT `username`,`fullname`,`email`,`password` FROM `tbl_user`";
        $data = $con->prepare($sql);
        $data->execute();
        return $data->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDetail($index) {
        $con = $this->con();
        $user_id = $index + 1;
        echo $user_id;
        $sql = "SELECT `username`, `fullname`, `email`, `password` FROM `tbl_user` WHERE `user_id` = :user_id";
        $data = $con->prepare($sql);
        $data->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $data->execute();
        return $data->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>
