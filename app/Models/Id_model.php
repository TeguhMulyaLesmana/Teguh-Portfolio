<?php

namespace App\Models;

use CodeIgniter\Model;

class Id_model extends Model
{
    protected $table = "biodata";

    public function getBiodata()
    {
        return $this->findAll();
    }
}
