<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasswordResetLinkController extends Controller
{
    public function create()
    {
        return view('pages.super_admin.general.forgotPassword');
    }
}
