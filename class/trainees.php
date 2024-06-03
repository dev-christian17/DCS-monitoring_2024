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
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $data){
            echo '<!-- Modal -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--modal body-->
              <div class="modal-dialog modal-dialog-centered ml2-left">
                <div class="container">
                  <div class="row">
                    <div class="col-md-offset-4 col-lg-4 col-md-offset-3 col-sm-6">
                  
                      <div class="form-container">
                       
                        <form  class="form-horizontal modal-content" method="get">
                          <h3 class="title">Update Details Form</h3>
                      
                          <div class="form-group">
                            <span class="input-icon"><i class="la la-user"></i></span>
                            <input type="text" class="form-control" name="username" placeholder="Username" value="' . htmlspecialchars($data['username']) . '">
                          </div>
        
                          <div class="form-group">
                            <span class="input-icon"><i class="la la-terminal"></i></span>
                            <input type="text" class="form-control" name="fullname" placeholder="Full name" value="' . htmlspecialchars($data['fullname']) . '">
                          </div>
        
                          <div class="form-group">
                            <span class="input-icon"><i class="la la-envelope"></i></span>
                            <input type="email" class="form-control" name="email" placeholder="E-mail" value="' . htmlspecialchars($data['email']) . '">
                          </div>
        
                          <div class="form-group">
                            <span class="input-icon"><i class="la la-lock"></i></span>
                            <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="' . htmlspecialchars($data['password']) . '">
                          </div>
                                    
                          <button class="btn">Update</button>
                          
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--End modal body-->
            </div><!--End Modal-->';
        }
    }
    

}

?>
