<?php

namespace App\Models;

use CodeIgniter\Model;

class Qurban extends Model
{
    protected $table = 'dataqurban2024';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['cabang', 'sapi_bumm', 'sapib_bumm', 'kambing_bumm', 'sapi_mandiri', 'kambing_mandiri', 'info'];
}