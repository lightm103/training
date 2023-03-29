<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Member::get();
        // dd($data);
        return view('member.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'place_name' => 'required',
            'region' => 'required',
            'postal_code' => 'required',
            'latitude' => 'required',
            'longtitude' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'phone_mobile' => 'required',
            'leader_name' => 'required',
            'children_count' => 'required',
            'worker_count' => 'required',
            'like_count' => 'required',
            'share_count' => 'required',
            'view_count' => 'required',
            'bookmark_count' => 'required',
            'donate_count' => 'required',
        ]);


        // dd($data);
        Member::create($data);
        return redirect()->route('member.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $data = Member::where('id', $id)->first();
        // dd($data);
        return view('member.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'place_name' => 'required',
            'region' => 'required',
            'postal_code' => 'required',
            'latitude' => 'required',
            'longtitude' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'phone_mobile' => 'required',
            'leader_name' => 'required',
            'children_count' => 'required',
            'worker_count' => 'required',
            'like_count' => 'required',
            'share_count' => 'required',
            'view_count' => 'required',
            'bookmark_count' => 'required',
            'donate_count' => 'required',
        ]);


        // dd($data);
        Member::where('id', $id)->update($data);
        return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Member::where('id', $id)->delete();
        return back();
    }

}
