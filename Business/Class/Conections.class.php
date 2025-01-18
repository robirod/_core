
<?php

use FTP\Connection;

class Conections extends mysqli
{
    public $hostname;
    public $username;
    public $password;
    public $database;

   

    public function __construct($hostname, $username, $password, $database)
    {
        try{
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            parent::__construct($hostname,$username,$password,$database);
            echo "Joder, esto si son conexiones";
        }
        catch (mysqli_sql_exception $e){
            echo "Bueno se intento, error: " . $e->getMessage();

        }


       
    }

    public function mySqlConnection (){
        $host = (string)$this->hostname;
        $user = (string)$this->username;
        $pass = (string)$this->password;
        $databaseName = (string)$this->database; 
        print_r('antes de llamado');
       
        $mySql = new mysqli($host,$user,$pass,$databaseName);
        print_r('despues de llamado');
    }
    
}

$con = new Conections("localhost","root","","MEDIA");
//$con->mySqlConnection();
?>
