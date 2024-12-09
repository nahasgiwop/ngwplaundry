<?php

namespace App\Controllers\Auth;

use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        // Menampilkan halaman login
        $data = [
            'title' => 'Login'
        ];

        return view('Auth/login', $data);
    }

    public function handleLogin()
    {
        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->with('errors', $validation->getErrors())->withInput();
        }

        // Dummy login (contoh saja, gunakan database pada produksi nyata)
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if ($email === 'user@example.com' && $password === 'password123') {
            // Set session
            session()->set('isLoggedIn', true);
            session()->set('userEmail', $email);

            // Redirect ke dashboard
            return redirect()->to('/dashboard');
        }

        // Jika login gagal
        return redirect()->back()->with('error', 'Email atau password salah')->withInput();
    }

    public function logout()
    {
        // Hapus session dan redirect ke halaman login
        session()->destroy();
        return redirect()->to('/login');
    }

    public function home()
    {
        // Menampilkan halaman beranda (home)
        $data = [
            'title' => 'Beranda',
        ];

        return view('home', $data); // Pastikan file `home.php` ada di folder `app/Views`
    }
       
    }
    

