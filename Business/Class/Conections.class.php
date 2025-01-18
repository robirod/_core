
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
}

$con = new Conections("localhost","root","","MEDIA");

?>
