<?php

namespace App\Controllers;

use App\Models\EmployeeModel;

class EmployeeController extends BaseController
{
    protected $employeeModel;

    public function __construct()
    {
        $this->employeeModel = new EmployeeModel();
    }

    // Menampilkan daftar karyawan
    
    public function index()
    {
        // Ambil data pencarian jika ada
        $search = $this->request->getGet('search');

        // Query untuk mengambil data karyawan dengan pencarian jika ada
        $builder = $this->employeeModel->orderBy('id', 'ASC'); // urutkan berdasarkan ID (atau field lain)

        if ($search) {
            $builder->like('name', $search); // mencari berdasarkan nama
        }

        // Ambil data dengan paginasi
        $employees = $builder->paginate(10); // 10 karyawan per halaman
        $pager = $this->employeeModel->pager;

        return view('employee/index', [
            'employees' => $employees,
            'pager' => $pager, // Teruskan variabel pager ke tampilan
            'search' => $search
        ]);
    }


    // Menyimpan data karyawan
    public function store()
    {
        // Mendapatkan data email yang dikirimkan
        $email = $this->request->getPost('email');

        // Mengecek apakah email sudah ada di database
        $existingEmployee = $this->employeeModel->where('email', $email)->first();

        if ($existingEmployee) {
            // Jika email sudah ada, beri pesan error dan kembalikan ke form
            return redirect()->back()->with('error', 'Email sudah terdaftar.');
        }

        // Jika email belum ada, lanjutkan proses penyimpanan
        try {
            $this->employeeModel->save([
                'name' => $this->request->getPost('name'),
                'email' => $email,
                'phone' => $this->request->getPost('phone'),
                'position' => $this->request->getPost('position'),
                'status' => $this->request->getPost('status'),
            ]);
            return redirect()->to('/employee')->with('success', 'Karyawan berhasil ditambahkan.');
        } catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {
            // Jika terjadi error lain, tampilkan pesan error
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data karyawan.');
        }
    }
    // Memperbarui data karyawan
    public function update($id)
    {
        $this->employeeModel->update($id, [
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'phone'   => $this->request->getPost('phone'),
            'position'=> $this->request->getPost('position'),
            'status'  => $this->request->getPost('status'),
        ]);
        return redirect()->to('/employee')->with('success', 'Karyawan berhasil diperbarui.');
    }

    // Menghapus data karyawan
    public function delete($id)
    {
        $this->employeeModel->delete($id);
        return redirect()->to('/employee')->with('success', 'Karyawan berhasil dihapus.');
    }
    public function create()
    {
        // Kirim data ke halaman admin panel
        return view('employee/create');
    }
    // Menampilkan form edit karyawan
public function edit($id)
{
    // Cari data karyawan berdasarkan ID
    $employee = $this->employeeModel->find($id);

    // Jika data tidak ditemukan, arahkan ke halaman sebelumnya dengan pesan error
    if (!$employee) {
        return redirect()->to('/employee')->with('error', 'Karyawan tidak ditemukan.');
    }

    // Kirim data karyawan ke view edit
    return view('employee/edit', [
        'employee' => $employee
    ]);
}

}
