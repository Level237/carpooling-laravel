<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function reservations(){
        return view('admin.reservations.list');
    }
    public function users(){
        return view('admin.users.index');
    }

    public function addUser(){

    }
}
