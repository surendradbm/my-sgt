<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        return view('pages.super_admin.reports.index');
    }
}
