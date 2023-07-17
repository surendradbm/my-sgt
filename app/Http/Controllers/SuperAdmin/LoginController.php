<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Models\SuperAdmin\Login;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.super_admin.general.login');
    }

    public function store(Request $request)
    {
        try {
            $user = Login::where('email', $request->email)->first();
            if (!$user) {
                throw new \Exception('Invalid Email.');
            }
            if (!$user || !Hash::check($request->password, $user->password)) {
                throw new \Exception('Invalid password.');
                // return redirect()->route('superadmin.login');
            } else {
                return redirect()->route('dashboard.index');
            }
        } catch (\Exception $e) {
            return back()->with('error', '' . $e->getMessage());
        }
    }
}
