<?php

namespace App\Models;

use CodeIgniter\Model;

class Panitia extends Model
{
    protected $table = 'datapanitia';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['nama', 'cabang', 'no_hp', 'seksi', 'ket'];
}