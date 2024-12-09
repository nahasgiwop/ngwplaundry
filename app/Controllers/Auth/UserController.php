<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function profile()
    {
        // Data pengguna dari sesi (pastikan sistem login menyimpan data pengguna ke sesi)
        $user = session()->get('user');

        // Jika sesi kosong, arahkan ke halaman login
        if (!$user) {
            return redirect()->to('/login');
        }

        // Kirim data pengguna ke tampilan
        return view('profile', ['user' => $user]);
    }
}
