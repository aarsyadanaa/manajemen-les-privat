<?php
namespace App\Http\Controllers\Umum;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Karyawan;
use App\Models\Pic;


class AuthController extends Controller
{
    
    public function login() {
        return view('Umum.login.login');
    }

    public function dologin(Request $request) {
        // validasi
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($credentials)) {

            // buat ulang session login
            $request->session()->regenerate();
            if (auth()->user()->role_id === 1) 
            {
                // jika user 
                return redirect()->intended('/superadmin');
            } 
            if (auth()->user()->role_id === 2) 
            {
                return redirect()->intended('/pic');
            } 
            else 
            {
            if (Karyawan::where('id_user', Auth()->id())->first() !=null) 
            {
                // jika tenaga teknis
                return redirect()->intended('/karyawan');
            } 
            else{
                // jika user 
                return redirect()->intended('/baru');
            }
                
            }
        }

        // jika email atau password salah
        // kirimkan session error
        return back()->with('error', 'email atau password salah');
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

    


