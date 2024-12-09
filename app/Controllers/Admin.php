<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        // Kirim data ke halaman admin panel
        return view('admin/index');
    }
}
