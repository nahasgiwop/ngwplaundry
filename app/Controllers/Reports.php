<?php

namespace App\Controllers;

use App\Models\ReportModel; // Ganti sesuai model Anda

class Reports extends BaseController
{
    protected $reportModel;

    public function __construct()
    {
        $this->reportModel = new ReportModel();
    }

    public function index()
    {
        $data['reports'] = $this->reportModel->findAll();
        return view('reports/index', $data);
    }

    public function create()
    {
        return view('reports/create');
    }

    public function store()
    {
        $this->reportModel->save([
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/reports')->with('success', 'Report added successfully.');
    }

    public function edit($id)
    {
        $data['report'] = $this->reportModel->find($id);
        return view('reports/edit', $data);
    }

    public function update($id)
    {
        $this->reportModel->update($id, [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/reports')->with('success', 'Report updated successfully.');
    }

    public function delete($id)
    {
        $this->reportModel->delete($id);
        return redirect()->to('/reports')->with('success', 'Report deleted successfully.');
    }
}
