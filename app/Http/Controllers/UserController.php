<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    public function index()
    {
        return view('Admin.User.index', [
            'title' => 'User List',
            'user' => User::all()
        ]);
    }


     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.User.tambah',[
            'title' => 'Tambah User'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // // Validasi data masukan
        // $validator = Validator::make($request->all(), [
        //     'role' => 'required|in:Admin,User',
        //     'nama' => 'required|string',
        //     'username' => 'required|unique:users',
        //     'password' => 'required',
        //     'telepon' => 'required',
        //     'alamat' => 'required',
        // ]);

        // // Jika validasi gagal, kembalikan pesan error
        // if ($validator->fails()) {
        //     return response()->json(['errors' => $validator->errors()], 400);
        // }

         $user = [
            'role' => $request->role,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
        ];
        User::create($user);
        return redirect()->intended('/admin.user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
