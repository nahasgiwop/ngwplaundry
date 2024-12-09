<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class PublicController extends Controller
{
    public function home()
    {
        $data = [
            'title' => 'Home - NGlaundry',
        ];

        return view('public/home', $data);
    }
}
