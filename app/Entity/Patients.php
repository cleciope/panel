<?php

namespace App\Entity;

use \App\Db\Database;
use \App\PDO;

class Patients{

  /** Query db */
public static function getPatients ($where = null, $order = null, $limit = null ){
  return (new Database('Patients')) ->select($where,$order,$limit)
                                    ->fetchALL(PDO::FETCH_CLASS,self::class);
 }

}

?>