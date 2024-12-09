<?php

namespace App\Controllers;

use App\Models\PaymentModel;

class PaymentsController extends BaseController
{
    protected $paymentModel;

    public function __construct()
    {
        $this->paymentModel = new PaymentModel();
    }

    // Menampilkan daftar pembayaran
    public function index()
    {
        // Ambil data pencarian jika ada
        $search = $this->request->getGet('search');
    
        $builder = $this->paymentModel->orderBy('id', 'ASC'); // Urutkan berdasarkan ID
    
        // Jika ada pencarian, lakukan pencarian berdasarkan order_id atau amount
        if ($search) {
            $builder->like('order_id', $search)
                    ->orLike('amount', $search); // Mencari berdasarkan order_id atau amount
        }
    
        // Ambil data pembayaran dengan paginasi
        $payments = $builder->paginate(10); // 10 pembayaran per halaman
        $pager = $this->paymentModel->pager;
    
        return view('payments/index', [
            'payments' => $payments,
            'pager' => $pager, // Pastikan objek pager diteruskan
            'search' => $search // Kirimkan pencarian ke view
        ]);
    }
    
    // Menampilkan form tambah pembayaran
    public function create()
    {
        return view('payments/create');
    }

    // Menyimpan data pembayaran
    public function store()
    {
        $this->paymentModel->save([
            'order_id' => $this->request->getPost('order_id'),
            'amount' => $this->request->getPost('amount'),
            'payment_date' => $this->request->getPost('payment_date'),
        ]);

        return redirect()->to('/payments')->with('success', 'Payment added successfully.');
    }

    // Menampilkan form edit pembayaran
    public function edit($id)
    {
        $payment = $this->paymentModel->find($id);
        return view('payments/edit', ['payment' => $payment]);
    }

    // Memperbarui data pembayaran
    public function update($id)
    {
        $this->paymentModel->update($id, [
            'order_id' => $this->request->getPost('order_id'),
            'amount' => $this->request->getPost('amount'),
            'payment_date' => $this->request->getPost('payment_date'),
        ]);

        return redirect()->to('/payments')->with('success', 'Payment updated successfully.');
    }

    // Menghapus data pembayaran
    public function delete($id)
    {
        $this->paymentModel->delete($id);
        return redirect()->to('/payments')->with('success', 'Payment deleted successfully.');
    }
}
