<?php

namespace App\Http\Controllers\PropertyOwner;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{

    public function signUp()
    {
        return view('pages/property_owner/auth/register');
    }

    public function verify_email()
    {
        return view('pages.property_owner.auth.verify-email');
    }

    public function add_phone()
    {
        return view('pages.property_owner.auth.add-phone');
    }

    public function completed()
    {
        return view('pages.property_owner.auth.completed');
    }

    public function company_details()
    {
        return view('pages.property_owner.auth.company-details');
    }

    public function select_plan()
    {
        return view('pages.property_owner.auth.select-plan');
    }

    public function billing_address()
    {
        return view('pages.property_owner.auth.billing-address');
    }

    public function payment()
    {
        return view('pages.property_owner.auth.payment');
    }
}
