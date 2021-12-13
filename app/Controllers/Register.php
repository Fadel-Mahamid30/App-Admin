<?php

namespace App\Controllers;
use CodeIgniter\Models\UserModel;
use CodeIgniter\Models\DokterModel;
use CodeIgniter\Models\PasienModel;
use App\Controllers\BaseController;

class Register extends BaseController
{
    var $dokter; var $pasien; var $rumahSakit;
	public function __construct(){
		$this->rumahSakit = new \App\Models\UserModel();
		$this->dokter = new \App\Models\DokterModel();
		$this->pasien = new \App\Models\PasienModel();
	}

    public function index()
    {
        $data = [
            'title'     => 'Register',
        ];
        return view('admin/Register', $data);
    }

    public function store()
    {
        //load helper form and URL
        helper(['form', 'url']);
         
        //define validation
        $validation = $this->validate([
            'email' => [
                'rules'  => 'required|is_unique[TblUser.email]',
                'errors' => [
                    'required' => 'Masukkan email anda/Email sudah di pakai.'
                ]
            ],
            'Password'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Password.'
                ]
            ],
            'namaPengguna'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Pengguna.'
                ]
            ],
        ]);

        if(!$validation) {

            //render view with error validation message
            return view('admin/Register', [
                'validation' => $this->validator,
                'title'     => 'Register',
            ]);

        } else
            $rumahSakit = new \App\Models\UserModel();
		    $rumahSakit->insert([
			    'email' => $this->request->getPOST('email'),
			    'userType' => 'Admin',
			    'userAlias' => '',
			    'namaPengguna' => $this->request->getPOST('namaPengguna'),
			    'Password' => $this->request->getPOST('Password'),
                'Status' => '0'
		    ]);

            //flash message
            session()->setFlashdata('Register', 'Post Berhasil Disimpan');

            return redirect()->to(base_url('/'));
        }
}
