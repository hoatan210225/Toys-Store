
<?php
class connect{
    public $server;
    public $dbName;
    public $username;
    public $password;

    public function __construct(){
        $this->server ="uzb4o9e2oe257glt.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $this->username ="gwk5xsswvitwy95e";
        $this->password = "	ymo54c8lehlq01xy";
        $this->dbName = "cof0ekqwsqek5p9v";
    }
    //option 1: mySQLli
   function connectToMySQL():mysqli{
        $conn = new mysqli($this->server,$this->username,$this->password,$this->dbName);
        if($conn->connect_error){
            die("Failed".$conn->connect_error);
        }else{
           // echo"Connect!";
        }
        return $conn;
    }
    //option 2: PDO
    function connectTOPDO():PDO{
        try{
            $conn =new PDO("mysql:host=$this->server;dbname=$this->dbName", $this->username, $this->password);
           // echo "connect! PDO";
        }catch(PDOException $e){
            die("Failed".$e);
        }
        return $conn;
    }
}
// $c = new connect();
// //$c->connectTOPDO();
// $c->connectToMySQL();
?>