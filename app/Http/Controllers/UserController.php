<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::paginate(10);
        // dd($data);
        return view('user', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        // dd($data);
        $data['password'] = bcrypt($request->password);
        User::create($data);
        return redirect()->route('login');
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
    public function edit($id)
    {
        $data = User::where('id',$id)->first();
        // dd($data);
        return view('edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => '',
            'photo' => 'required|file',
        ]);
        $data['password'] = bcrypt($request->password);
        $type = $request->file('photo')->extension();
        $fileName = time().'';
        $request->file('photo')->move(public_path('file'), 'file'. $fileName . '.' . $type);
        $data['photo'] = 'file'. $fileName . '.' . $type;
        
        // dd($data);
        $user = User::where('id',$id)->update($data);
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $data = User::where('id',$id)->delete();
        return back();
    }
}
