<?php

class Connection {
    private static $PDO = null;
    
    public static function getConnection(){
        if(is_null($this->PDO))
            $this->PDO = new PDO('mysql:host=localhost;port=1336;dbname='./*DbNAME*/, /*DBUser*/, /*DBPW*/);
        return $this->PDO;
    }
}