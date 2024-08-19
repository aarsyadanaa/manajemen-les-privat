<?php
namespace App\Http\Controllers\Superadmin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use auth;
use App\Models\Karyawan;
use App\Models\Cuti;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function index(){
        $user=User::all();
        return view('Superadmin.user.index', compact('user'));
    }
    public function create()
     {
          $user = User::all();
          return view('Superadmin.user.create', compact('user'));
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
        return redirect('/superadmin/user')->with('success', 'User berhasil ditambahkan!');
    }
    public function edit($id)
    {
     $user = User::where('id',$id)->first();
     return view('Superadmin.user.edit',compact('user'));
    }

    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'role_id' => 'required',
        ]);
        User::where('id', $id)->update($validatedData);
        return redirect('/superadmin/user')->with('success', 'Data User berhasil di edit!');
    }
    public function destroy($id)
     {
          $user = User::find($id);
          $cuti->delete();
          return redirect('/superadmin/user')->with('msg','Data Berhasil di Hapus');
     }
}