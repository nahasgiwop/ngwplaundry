<?php

namespace App\Controllers;

use App\Models\ServiceModel;
use CodeIgniter\Controller;

class ServiceController extends Controller
{
    protected $serviceModel;

    public function __construct()
    {
        $this->serviceModel = new ServiceModel();
    }

    // Menampilkan daftar layanan dengan pencarian, filter kategori, dan status
    public function index()
    {
        $request = \Config\Services::request();
        $search = $request->getGet('search');
        $category = $request->getGet('category');
        $status = $request->getGet('status');
        
        // Query layanan dengan filter
        $services = $this->serviceModel;

        if ($search) {
            $services = $services->like('name', $search);
        }
        
        if ($category) {
            $services = $services->like('category', $category);
        }
        
        if ($status) {
            $services = $services->where('status', $status);
        }

        // Paginasi
        $pager = service('pager');
        $services = $services->paginate(10);
        
        return view('service/index', [
            'services' => $services,
            'pager' => $pager,
            'search' => $search,
            'category' => $category,
            'status' => $status,
        ]);
    }

    // Menyimpan data layanan baru
    public function store()
    {
        $this->serviceModel->save([
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price'       => $this->request->getPost('price'),
            'duration'    => $this->request->getPost('duration'),
            'category'    => $this->request->getPost('category'),
            'status'      => $this->request->getPost('status'),
            'discount'    => $this->request->getPost('discount') ?? 0, // Pastikan ada nilai default
            'capacity'    => $this->request->getPost('capacity') ?? 1, // Pastikan ada nilai default
            'extra_time'  => $this->request->getPost('extra_time') ?? 0,
            'extra_price' => $this->request->getPost('extra_price') ?? 0,
        ]);

        return redirect()->to('/service')->with('success', 'Layanan berhasil ditambahkan.');
    }

    // Menampilkan form edit layanan
    public function edit($id)
    {
        $service = $this->serviceModel->find($id);
        if (!$service) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Layanan dengan ID $id tidak ditemukan.");
        }

        $data['service'] = $service;
        return view('service/edit', $data);
    }

    // Memperbarui data layanan
    public function update($id)
    {
        $this->serviceModel->update($id, [
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price'       => $this->request->getPost('price'),
            'duration'    => $this->request->getPost('duration'),
            'category'    => $this->request->getPost('category'),
            'status'      => $this->request->getPost('status'),
            'discount'    => $this->request->getPost('discount') ?? 0, // Pastikan ada nilai default
            'capacity'    => $this->request->getPost('capacity') ?? 1, // Pastikan ada nilai default
            'extra_time'  => $this->request->getPost('extra_time') ?? 0,
            'extra_price' => $this->request->getPost('extra_price') ?? 0,
        ]);
    
        return redirect()->to('/service')->with('success', 'Layanan berhasil diperbarui.');
    }

    // Menghapus layanan
    public function delete($id)
    {
        $this->serviceModel->delete($id);
        return redirect()->to('/service')->with('success', 'Layanan berhasil dihapus.');
    }

    // Mengekspor layanan ke format CSV
    public function exportCsv()
    {
        $services = $this->serviceModel->findAll();

        $filename = "services_" . date('Y-m-d') . ".csv";
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');

        $output = fopen('php://output', 'w');
        fputcsv($output, ['ID', 'Nama', 'Deskripsi', 'Harga', 'Durasi', 'Kategori', 'Status']);
        
        foreach ($services as $service) {
            fputcsv($output, [
                $service['id'],
                $service['name'],
                $service['description'],
                $service['price'],
                $service['duration'],
                $service['category'],
                $service['status']
            ]);
        }

        fclose($output);
    }
    public function create()
    {
        return view('service/create');
    }
}
