<?php

namespace App\Models;

use CodeIgniter\Model;

class Cabang extends Model
{
    protected $table = 'datacabang';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['cabang', 'ketua_cabang', 'no_hp', 'panitia_qurban', 'no2_hp', 'alamat', 'perwakilan'];
}