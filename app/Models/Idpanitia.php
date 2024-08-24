<?php

namespace App\Models;

use CodeIgniter\Model;

class Idpanitia extends Model
{
    protected $table = 'id_panitia';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['seksi'];
}