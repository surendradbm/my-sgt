<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function create()
    {
        return view('pages.super_admin.subscription.create');
    }
    public function manage()
    {
        return view('pages.super_admin.subscription.manage');
    }
    public function edit()
    {
        return view('pages.super_admin.subscription.edit');
    }
}
