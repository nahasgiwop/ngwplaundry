<?php

namespace App\Models;

use CodeIgniter\Model;

class InventoryModel extends Model
{
    protected $table = 'inventory';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'quantity', 'unit', 'price', 'status', 'category'];

    // Menambahkan metode untuk mengambil data inventory
    public function getInventory($search = null, $category = null, $status = null)
    {
        $builder = $this->table($this->table);

        if ($search) {
            $builder->like('name', $search);
        }

        if ($category) {
            $builder->where('category', $category);
        }

        if ($status) {
            $builder->where('status', $status);
        }

        return $builder->paginate(10);
    }
}
