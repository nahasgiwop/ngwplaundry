<?php

namespace App\Controllers;

use App\Models\OrdersModel;
use CodeIgniter\Controller;

class OrdersController extends Controller
{
    protected $ordersModel;

    public function __construct()
    {
        $this->ordersModel = new OrdersModel();
    }

    public function index()
    {
        $data['orders'] = $this->ordersModel->findAll();
        return view('orders/index', $data);
    }

    public function create()
    {
        return view('orders/create');
    }

    public function store()
    {
        $this->ordersModel->save([
            'customer_name' => $this->request->getPost('customer_name'),
            'order_date'    => $this->request->getPost('order_date'),
            'total_price'   => $this->request->getPost('total_price'),
            'status'        => $this->request->getPost('status'),
        ]);

        return redirect()->to('/orders');
    }

    public function edit($id)
    {
        $data['order'] = $this->ordersModel->find($id);
        return view('orders/edit', $data);
    }

    public function update($id)
    {
        $this->ordersModel->update($id, [
            'customer_name' => $this->request->getPost('customer_name'),
            'order_date'    => $this->request->getPost('order_date'),
            'total_price'   => $this->request->getPost('total_price'),
            'status'        => $this->request->getPost('status'),
        ]);

        return redirect()->to('/orders');
    }

    public function delete($id)
    {
        $this->ordersModel->delete($id);
        return redirect()->to('/orders');
    }
}
