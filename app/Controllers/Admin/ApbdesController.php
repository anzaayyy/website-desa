<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\APBDesModel;

class ApbdesController extends BaseController
{
    protected $apbdes;

    public function __construct()
    {
        $this->apbdes = new APBDesModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data APBDes',
            'data' => $this->apbdes->orderBy('id_apbdes', 'DESC')->findAll()
        ];
        return view('admin/apbdes/index', $data);
    }

    public function create()
    {
        return view('admin/apbdes/create');
    }

    public function store()
    {
        $this->apbdes->save([
            'tahun' => $this->request->getPost('tahun'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'total_pendapatan' => $this->request->getPost('total_pendapatan'),
            'total_belanja' => $this->request->getPost('total_belanja'),
            'total_pembiayaan' => $this->request->getPost('total_pembiayaan'),
            'silpa' => $this->request->getPost('silpa')
        ]);

        return redirect()->to('/admin/apbdes')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data['row'] = $this->apbdes->find($id);
        return view('admin/apbdes/edit', $data);
    }

    public function update($id)
    {
        $this->apbdes->update($id, [
            'tahun' => $this->request->getPost('tahun'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'total_pendapatan' => $this->request->getPost('total_pendapatan'),
            'total_belanja' => $this->request->getPost('total_belanja'),
            'total_pembiayaan' => $this->request->getPost('total_pembiayaan'),
            'silpa' => $this->request->getPost('silpa')
        ]);

        return redirect()->to('/admin/apbdes')->with('success', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {
        $this->apbdes->delete($id);
        return redirect()->to('/admin/apbdes')->with('success', 'Data berhasil dihapus!');
    }
}