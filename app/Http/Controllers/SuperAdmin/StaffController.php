<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        return view('pages.super_admin.staff.index');
    }
    
    public function manage()
    {
        return view('pages.super_admin.staff.manage');
    }

    public function edit()
    {
        return view('pages.super_admin.staff.edit');
    }
}
