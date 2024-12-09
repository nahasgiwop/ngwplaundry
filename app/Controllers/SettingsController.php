<?php

namespace App\Controllers;

use App\Models\SettingsModel;

class SettingsController extends BaseController
{
    protected $settingsModel;

    public function __construct()
    {
        $this->settingsModel = new SettingsModel();
    }

    // Menampilkan halaman pengaturan
    public function index()
    {
        $settings = $this->settingsModel->findAll();
        return view('settings/index', ['settings' => $settings]);
    }

    // Menyimpan perubahan pengaturan
    public function update()
    {
        $data = $this->request->getPost();
        foreach ($data as $key => $value) {
            $this->settingsModel->updateSetting($key, $value);
        }

        return redirect()->to('/settings')->with('success', 'Pengaturan berhasil diperbarui.');
    }
}
