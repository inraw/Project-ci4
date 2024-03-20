<?php

namespace App\Controllers;
use App\Models\DosenModel;

class Dosen extends BaseController
{
    public function index(): string
    {
        //model initialize
        $DataDosen = new DosenModel();
        $pager = \Config\Services::pager();

        $data = array(
            'DataDosen' => $DataDosen->paginate(2, 'dosen'),
            'pager' => $DataDosen->pager
        );
        return view('dosen', $data);
    }

    public function create()
    {
        $data = [];

        $kode = $this->request->getPost('kode_dosen');
        $nama = $this->request->getPost('nama_dosen');
        $status = $this->request->getPost('status_dosen');

        $validation = \Config\Services::validation();
        $validation->setRules([
            'kode_dosen' => 'required',
            'nama_dosen'=> 'required',
            'status'=> 'required',
        ]);

        //jika validasi gagal
        if ($validation->withRequest($this->request)->run()) 
        {
            $data['validation'] = $validation;
            return view('dosen', $data);
        }

        //jika validasi berhasil
        $dosenModel = new DosenModel();
        $dosenModel->insert([
            'kode_dosen' => $kode,
            'nama_dosen'=> $nama,
            'status_dosen'=> $status
        ]);

        return redirect()->to('dosen')->with('message','Data telah ditambahkan');

    }
}
