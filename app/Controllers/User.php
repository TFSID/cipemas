<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function home()
    {

        return view('layout/header_link') 
        . view('layout/navbar')
        . view('user/index')
        . view('layout/footer_link');
    }

    public function pengaduan()
    {
        if(!session()->get('logged_in')){
            return redirect()->to(base_url('/login'));
        }

        return view('layout/header_link')
        . view('layout/navbar')
        . view('form_pengaduan')
        . view('layout/footer_link');
    }
    public  function dashboard()
    {
        return 
        
        view('user/dashboard');
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }

    public  function tanggapan()
    {
        return 
        
        view('user/tanggapan');
    }
}
