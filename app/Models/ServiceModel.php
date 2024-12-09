<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected $table = 'service';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name', 'description', 'price', 'duration', 
        'category', 'status', 'discount', 
        'capacity', 'extra_time', 'extra_price', 'image'
    ];
}
