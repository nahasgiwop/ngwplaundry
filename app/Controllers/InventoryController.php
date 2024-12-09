<?php

namespace App\Controllers;

use App\Models\InventoryModel;

class InventoryController extends BaseController
{
    protected $inventoryModel;

    public function __construct()
    {
        $this->inventoryModel = new InventoryModel();
    }

    public function index()
    {
        $search = $this->request->getGet('search');
        $category = $this->request->getGet('category');
        $status = $this->request->getGet('status');

        $inventory = $this->inventoryModel->getInventory($search, $category, $status);

        return view('inventory/index', [
            'inventory' => $inventory,
            'search' => $search,
            'category' => $category,
            'status' => $status,
            'pager' => $this->inventoryModel->pager,
        ]);
    }

    public function create()
    {
        return view('inventory/create');
    }

    public function store()
    {
        $data = [
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'quantity'    => $this->request->getPost('quantity'),
            'unit'        => $this->request->getPost('unit'),
            'price'       => $this->request->getPost('price'),
            'status'      => $this->request->getPost('status'),
            'category'    => $this->request->getPost('category'),
        ];

        $this->inventoryModel->save($data);
        return redirect()->to('/inventory')->with('success', 'Inventory berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['inventory'] = $this->inventoryModel->find($id);
        return view('inventory/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'quantity'    => $this->request->getPost('quantity'),
            'unit'        => $this->request->getPost('unit'),
            'price'       => $this->request->getPost('price'),
            'status'      => $this->request->getPost('status'),
            'category'    => $this->request->getPost('category'),
        ];

        $this->inventoryModel->update($id, $data);
        return redirect()->to('/inventory')->with('success', 'Inventory berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->inventoryModel->delete($id);
        return redirect()->to('/inventory')->with('success', 'Inventory berhasil dihapus.');
    }
}
