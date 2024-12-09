<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table      = 'employees';  // Ganti dengan nama tabel Anda
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'email', 'phone', 'position', 'status']; // kolom yang bisa diupdate

    // Aktifkan penggunaan timestamp
    protected $useTimestamps = true;

    // Kolom yang akan digunakan sebagai created_at dan updated_at
    protected $createdField  = 'created_at';  // pastikan kolom ini ada di database
    protected $updatedField  = 'updated_at';  // pastikan kolom ini ada di database
}
