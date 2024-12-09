<?php

namespace App\Models;

use CodeIgniter\Model;

class PromotionModel extends Model
{
    protected $table = 'promotions';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description', 'discount_percent', 'start_date', 'end_date'];
    protected $useTimestamps = false;
}
