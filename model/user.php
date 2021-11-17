<?php 
class User{
    public $id;
    public $username;
    public $password;

    public function __construct($id=null, $username=null, $password=null){
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    public static function logInUser($usr, mysqli $conn){
        $query = "SELECT * FROM user where username='$usr->username' and password='$usr->password'";
        //Ovde nam je konekcija sa bazom!
        return $conn->query($query);
    }
}

?>