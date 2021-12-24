<?php

namespace src\Queries;

use \DB\Connection;
use src\Queries;

class patients extends Queries {

    public static function listAll() {
        $sql = new Sql();
        return $sql->select("SELECT * FROM patients ORDER BY nomepac;");
    }


    public function get($idpatients) {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM patients WHERE idpac = :idpac", array(
            ":idpac"=>$idpatients
        ));
        $data = $results[0];
        $this->setData($data);
    }

}

?>