<?php

namespace App\Models;

use CodeIgniter\Model;

class OrdersModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $allowedFields = ['customer_name', 'order_date', 'total_price', 'status'];
    protected $useTimestamps = true;
}
