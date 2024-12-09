<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index()
    {
        $customerModel = new CustomerModel();
        $data['customers'] = $customerModel->findAll();
        return view('customers/index', $data);
    }

    public function create()
    {
        return view('customers/create');
    }

    public function store()
{
    $model = new CustomerModel();

    // Validasi input
    $data = [
        'name'    => $this->request->getPost('name'),
        'email'   => $this->request->getPost('email'),
        'phone'   => $this->request->getPost('phone'),
        'address' => $this->request->getPost('address'),
    ];

    // Cek apakah email sudah ada di database
    if ($model->where('email', $data['email'])->first()) {
        return redirect()->back()->withInput()->with('error', 'Email is already registered!');
    }

    // Simpan data jika valid
    if ($model->insert($data)) {
        return redirect()->to('/customers')->with('success', 'Customer added successfully!');
    }

    // Handle error lain (jika ada)
    return redirect()->back()->withInput()->with('error', 'Failed to save customer.');
}

    public function edit($id)
    {
        $customerModel = new CustomerModel();
        $data['customer'] = $customerModel->find($id);
        return view('customers/edit', $data);
    }

    public function update($id)
    {
        $customerModel = new CustomerModel();
        
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'address' => $this->request->getPost('address'),
        ];
        
        $customerModel->update($id, $data);
        return redirect()->to('/customers')->with('success', 'Customer updated successfully');
    }

    public function delete($id)
    {
        $customerModel = new CustomerModel();
        $customerModel->delete($id);
        return redirect()->to('/customers')->with('success', 'Customer deleted successfully');
    }
}
