<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentModel extends Model
{
    protected $table = 'payments';
    protected $primaryKey = 'id';
    protected $allowedFields = ['order_id', 'amount', 'payment_date'];
    protected $useTimestamps = true; // Untuk created_at dan updated_at
}
