<?php

namespace App\Models;

use CodeIgniter\Model;

class HomedModel extends Model
{

    public function entidades_lst($valor)
    {
        $sql = "SELECT * FROM empresa WHERE emp_id=$valor;";
        $query = $this->db->query($sql);
   	    $result = $query->getResult();
        if (count($result) >= 1) {
            return $result;
        } else {
            return NULL;
        }
    }

}