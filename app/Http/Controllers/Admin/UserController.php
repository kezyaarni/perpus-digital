<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:users',
            'passwords'=>'required|string|min:6',
            'role'=>'required|in:admin,user',
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role'=>$request->role,
        ]);
        
        return redirect()->route('admin.user.index')->with('succsess','Data anggota berhasil ditambahkan.');
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
    public function edit(User $user)
    {
        return view('admin.user.edit', compact());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required|stirng|max:225',
            'email'=>'required|string|email|max:225|unique:users,email,'.$user->id,
            'role'=>'required|in:admin,user',
        ]);

         $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
        ];

        if ($request->filled('password')){
            $request->validate(['password'=>'string|min:6']);
            $data['password']= Hash::make($request->password);
        }
        
        $user->update($data);

        return redirect()->route('admin.user.index')->with('succsess','Data anggota berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if($user->id ===auth()->id()){
            return redirect()->route('admin.user.index')->with('error','anda tidak dapat menghapus akun sendiri yang sedang digunakan.');

        }
        $user->delete();
        return redirect()->route('admin.user.index')->with('success','data anggtoga berhasil diapus.');
    
    }
}
