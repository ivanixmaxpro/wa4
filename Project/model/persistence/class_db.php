<?php

require_once("interface_db.php");
//require_once("class_DbRowIterator.php"); 

class db extends PDO {

    private $server;
    private $username;
    private $password;
    private $dbname;
    private $link;

    public function __construct() {
        $this->setServer($GLOBALS['server']);
        $this->setUsername($GLOBALS['USER']);
        $this->setPassword($GLOBALS['PASS']);
        $this->setDbname($GLOBALS['bd']);
        $this->connect();
    }

    public function getServer() {
        return $this->server;
    }

    public function setServer($value) {
        $this->server = $value;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($value) {
        $this->username = $value;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($value) {
        $this->password = $value;
    }

    public function getDbname() {
        return $this->dbname;
    }

    public function setDbname($value) {
        $this->dbname = $value;
    }


    private function connect() {
        $dsn = 'mysql:host=' . $this->server . ';dbname=' . $this->dbname .";charset=utf8";
        parent::__construct($dsn, $this->getUsername(), $this->getPassword());

    }

    public function getLink() {
        return $this->link;
    }

    public function consulta($query) {
        $query->execute();
    }

    //get data of database
	public function consultar($query) {	    
	    $query->execute();
	    $result = $query->FetchAll(PDO::FETCH_ASSOC);
	    return $result;
	}
}

?>