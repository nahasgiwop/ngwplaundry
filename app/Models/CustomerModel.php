<?php
namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customers'; // Pastikan nama tabel benar
    protected $primaryKey = 'id';  // Pastikan primary key sesuai dengan tabel
    protected $allowedFields = ['name', 'email', 'phone', 'address'];
}
