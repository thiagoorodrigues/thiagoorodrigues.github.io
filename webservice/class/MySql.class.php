<?php

class MySql {

    private $_host = '';
    private $_user = '';
    private $_pass = '';
    private $_data = '';
    public $_con;


    public function __construct() {
        $this->conecta();
    }


    public function query($query = null) {
        if ($query != null) {
            return mysqli_query($this->_con, $query);
        } else {
            return null;
        }
    }

    public function last_id() {
        return mysqli_insert_id($this->_con);
    }


    private function conecta() {
        $this->_con = mysqli_connect($this->_host, $this->_user, $this->_pass, $this->_database);

        if (!$this->_con) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        } else {
            mysqli_query( $this->_con, 'set names UTF8');
            mysqli_query( $this->_con, 'SET character_set_connection=utf8');
            mysqli_query( $this->_con, 'SET character_set_client=utf8');
            mysqli_query( $this->_con, 'SET character_set_results=utf8');
            mysqli_query( $this->_con, 'SET FOREIGN_KEY_CHECKS = 0');
            return $this->_con;
        }
    }

}
