<?php

namespace App\Http\Controllers\PropertyOwner;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('pages.property_owner.auth.login');
    }

    public function loginCheck(Request $request)
    {
        try {
            $user = User::where('email', $request->email)
                ->where('user_type', $request->userType)
                ->first();
            if (!$user) {
                throw new \Exception('Invalid Email.');
            }
            if (!$user || !Hash::check($request->password, $user->password)) {
                throw new \Exception('Invalid password.');
            } else {
                return redirect()->route('property-owner.dashboard');
            }
        } catch (\Exception $e) {
            return back()->with('error', '' . $e->getMessage());
        }
    }

    public function forgetPassword()
    {
        return view('pages.property_owner.auth.forgot-password');
    }

    public function logOut()
    {
        session()->flush();
        return redirect()->route('property_owner.login');
    }
}
