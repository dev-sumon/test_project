<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function adminLogin()
    {
        if(Auth::guard('admin')->check()){
            return redirect()->route('admin.dashboard');
        }

        return view('backend.admin.login');
    }

    public function adminLoginCheck(Request $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');
        $check = Admin::where('email', $request->email)->first();
        if ($check) {
            if ($check->status == 1) {
                if (Auth::guard('admin')->attempt($credentials)) {
                    return redirect()->route('admin.dashboard');
                }
            } else {
            }
        } else {
        }
        return redirect()->route('admin.login');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
