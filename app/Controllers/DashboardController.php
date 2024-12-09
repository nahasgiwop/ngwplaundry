<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard'); // Tampilan utama dashboard
    }

    public function handlePost()
    {
        $data = $this->request->getPost();
        // Logika pemrosesan data POST
        return redirect()->to('/dashboard')->with('success', 'Data successfully submitted');
    }
}
