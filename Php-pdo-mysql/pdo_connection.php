<?php

//Database configs

//DB-Hostname
define('DBHOST','localhost');

//DB-User
define('DBUSER','root');

//DB-Password
define('DBPASSWORD','your-password');

//DB-name
define('DBNAME','your-database-name');

class DB {

    private $connection;
    private static $_instance;

    private $dbhost = DBHOST;
    private $dbuser = DBUSER;
    private $dbpass = DBPASSWORD;
    private $dbname = DBNAME;

    //Get an instance of the database @return Instance

    public static function getInstance(){
        if(!self::$_instance){
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    //Constructor
    private function __construct(){
        try{
            $this->connection = new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname,$this->dbuser,$this->dbpass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //Error handling
        }catch(PDOException $e){
            die("Failed to connect: ".$e->getMessage());
        }
    }

    //Magic method clone is empty to prevent duplication of connection
    private function __clone(){}

    //Get the connection
    public function getConnection(){
        return $this->connection;
    }

}

$db = DB::getInstance();

$conn = $db->getConnection();
