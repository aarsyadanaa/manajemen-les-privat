<?php
 
namespace App\Http\Controllers\Umum;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\User;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


 
class RegisterController extends Controller
{
    public function index()
    {
        return view('umum.register.register');
    }
 
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required',
            'role_id' => 'required',
        ]);
 
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('login')->with('success', 'Data anda telah tersimpan!');
    }

    public function forgotpass(){
        return view('umum.forgotpass.index');
    }
}