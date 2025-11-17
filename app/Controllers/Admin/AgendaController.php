<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AgendaModel;

class AgendaController extends BaseController
{
    protected $agendaModel;

    public function __construct()
    {
        $this->agendaModel = new AgendaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Agenda Desa',
            'data' => $this->agendaModel->orderBy('id', 'DESC')->findAll()
        ];
        return view('admin/agenda/index', $data);
    }

    public function create()
    {
        return view('admin/agenda/create');
    }

    public function store()
    {
        $file = $this->request->getFile('gambar');
        $fileName = $file->isValid() ? $file->getRandomName() : null;

        if ($fileName) {
            $file->move('uploads/agenda', $fileName);
        }

        $this->agendaModel->insert([
            'judul'     => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'waktu'     => $this->request->getPost('waktu'),
            'lokasi'    => $this->request->getPost('lokasi'),
            'gambar'    => $fileName ? 'uploads/agenda/' . $fileName : null,
        ]);

        return redirect()->to(base_url('admin/agenda'))->with('success', 'Agenda berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data['agenda'] = $this->agendaModel->find($id);
        return view('admin/agenda/edit', $data);
    }

    public function update($id)
    {
        $agenda = $this->agendaModel->find($id);
        $file = $this->request->getFile('gambar');
        $fileName = $agenda['gambar'];

        if ($file->isValid()) {
            $newName = $file->getRandomName();
            $file->move('uploads/agenda', $newName);
            $fileName = 'uploads/agenda/' . $newName;
        }

        $this->agendaModel->update($id, [
            'judul'     => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'waktu'     => $this->request->getPost('waktu'),
            'lokasi'    => $this->request->getPost('lokasi'),
            'gambar'    => $fileName,
        ]);

        return redirect()->to(base_url('admin/agenda'))->with('success', 'Agenda berhasil diperbarui');
    }

    public function delete($id)
    {
        $this->agendaModel->delete($id);
        return redirect()->to(base_url('admin/agenda'))->with('success', 'Agenda berhasil dihapus');
    }
}
