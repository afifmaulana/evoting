<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function users(){
        return view('pages.superadmin.users');
    }
    public function index(){
        return view('pages.superadmin.sekolah.index');
    }
    public function profil(){
        return view('pages.superadmin.profil');
    }
    public function create(){
        return view('pages.superadmin.sekolah.create');
    }
}

