<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingsModel extends Model
{
    protected $table = 'settings';
    protected $primaryKey = 'id';
    protected $allowedFields = ['key', 'value', 'description'];
    protected $useTimestamps = true;

    // Fungsi untuk mendapatkan pengaturan berdasarkan kunci
    public function getSetting($key)
    {
        return $this->where('key', $key)->first();
    }

    // Fungsi untuk memperbarui pengaturan
    public function updateSetting($key, $value)
    {
        return $this->where('key', $key)->set(['value' => $value])->update();
    }
}
