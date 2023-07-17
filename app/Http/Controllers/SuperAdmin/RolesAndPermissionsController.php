<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RolesAndPermissionsController extends Controller
{
    public function create()
    {
        return view('pages.super_admin.roles_and_permissions.create');
    }
    public function manage()
    {
        return view('pages.super_admin.roles_and_permissions.manage');
    }
}