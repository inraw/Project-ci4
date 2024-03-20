<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table = "dosen";

    protected $primaryKey = "id_dosen";

    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'kode_dosen',
        'nama_dosen',
        'status_dosen'
    ];
}