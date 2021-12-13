<?php

namespace App\Controllers;
use CodeIgniter\Models\UserModel;
use CodeIgniter\Models\DokterModel;
use CodeIgniter\Models\PasienModel;
use App\Controllers\BaseController;

class RsController extends BaseController
{
    var $dokter; var $pasien; var $rumahSakit;
	public function __construct(){
		$this->rumahSakit = new \App\Models\UserModel();
		$this->dokter = new \App\Models\DokterModel();
		$this->pasien = new \App\Models\PasienModel();
	}

    public function index()
    {
        $this->rumahSakit = new \App\Models\UserModel();
        $databaseRs = $this->rumahSakit->findAll();
        $data = [
            'title'     => 'Data Rumah Sakit',
            'user'      => $databaseRs
        ];
        return view('admin/index', $data);
    }

    public function create()
    {
        $databaseDk = $this->dokter->findAll();
        $databasePs = $this->pasien->findAll();
        $data = [
            'title'     => 'Add Users',
            'dokter'      => $databaseDk,
            'pasien'      => $databasePs
        ];
        return view('admin/FormTambah', $data);
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
            'userType'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan userType.'
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
            $this->dokter = new \App\Models\DokterModel();
		    $this->pasien = new \App\Models\PasienModel();
            $databaseDk = $this->dokter->findAll();
            $databasePs = $this->pasien->findAll();
            return view('admin/FormTambah', [
                'validation' => $this->validator,
                'title'     => 'Add Users',
                'dokter'      => $databaseDk,
                'pasien'      => $databasePs
            ]);

        } else
            $rumahSakit = new \App\Models\UserModel();
		    $rumahSakit->insert([
			    'email' => $this->request->getPOST('email'),
			    'userType' => $this->request->getPOST('userType'),
			    'userAlias' => $this->request->getPOST('userAlias'),
			    'namaPengguna' => $this->request->getPOST('namaPengguna'),
			    'Password' => $this->request->getPOST('Password'),
                'Status' => $this->request->getPOST('Status')
		    ]);

            //flash message
            session()->setFlashdata('message', 'Post Berhasil Disimpan');

            return redirect()->to(base_url('/'));
        }

    // user non aktif
        public function useroff()
        {
            $databaseRs = $this->rumahSakit->findAll();
            $data = [
                'title'     => 'User Non Active',
                'user'      => $databaseRs
            ];
            return view('admin/UserNonAktif', $data);
        }

        public function delete($email){
            $rumahSakit = new \App\Models\UserModel();
            $this->rumahSakit->delete($email);
            return redirect()->to("RS/UserOff")->with('success','Data Berhasil Di Hapus');
        }

        public function aktif($email){
            $rumahSakit = new \App\Models\UserModel();
            $data = [
                'email' => $email,
                'Status' => '1'
            ];
            $this->rumahSakit->save($data);
            return redirect()->to("RS/UserOff")->with('notif','User Berhasil Di Aktifkan');
        }

    // user aktif
        public function useron()
        {
            $databaseRs = $this->rumahSakit->findAll();
            $data = [
                'title'     => 'User Active',
                'user'      => $databaseRs
            ];
            return view('admin/UserAktif', $data);
        }

        public function nonaktif($email){
            $rumahSakit = new \App\Models\UserModel();
            $data = [
                'email' => $email,
                'Status' => '0'
            ];
            $this->rumahSakit->save($data);
            return redirect()->to("RS/UserOn")->with('notif','User Berhasil Di Non Aktifkan');
        }

        public function edit($email)
        {
            $databaseDk = $this->dokter->findAll();
            $databasePs = $this->pasien->findAll();
            $users = $this->rumahSakit->find($email);
            $data = [
                'title'   => 'Edit Users',
                'dokter'  => $databaseDk,
                'pasien'  => $databasePs,
                'user'    => $users
            ];
            return view('admin/FormEdit', $data);
        }

        public function update($email)
        {
            //load helper form and URL
            helper(['form', 'url']);
             
            //define validation
            $validation = $this->validate([
                'email' => [
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'Masukkan email.'
                    ]
                ],
                'userType'    => [
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'Masukkan User Type.'
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
                $databaseDk = $this->dokter->findAll();
                $databasePs = $this->pasien->findAll();
                $users = $this->rumahSakit->find($email);
                return view('admin/FormEdit', [
                    'validation'    => $this->validator,
                    'title'         => 'Add Users',
                    'dokter'        => $databaseDk,
                    'pasien'        => $databasePs,
                    'user'          => $users
                ]);
    
            } else
                $rumahSakit = new \App\Models\UserModel();
                $rumahSakit->update($email, [
                    'email' => $this->request->getPOST('email'),
                    'userType' => $this->request->getPOST('userType'),
                    'userAlias' => $this->request->getPOST('userAlias'),
                    'namaPengguna' => $this->request->getPOST('namaPengguna'),
                    'Password' => $this->request->getPOST('Password')
                ]);
    
                //flash message
                return redirect()->to("RS/UserOn")->with('success','User Berhasil Di Edit');
            }
}

