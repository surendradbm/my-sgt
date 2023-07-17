<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function create()
    {
        return view('pages.super_admin.coupon.create');
    }
    public function manage()
    {
        return view('pages.super_admin.coupon.manage');
    }
}
