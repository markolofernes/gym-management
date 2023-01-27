<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    public function index()
    {
        return view('index')->with('members', Member::latest()->get());
    }
    public function create(Request $request)
    {
        $member = new Member;
        $member->name = $request->name;
        $member->email = $request->email;
        $member->membership_type = $request->membership_type;
        $member->membership_expiration = $request->membership_expiration;
        $member->save();
        return redirect()->route('index')->with('success', $request->name . ' Successfully added!');
    }

    public function delete($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect()->route('index')->with('success', ' Successfully deleted!');
    }

    public function edit($id)
    {
        $member = Member::find($id);
        return view('editform')->with('Member', $member);
    }
    public function update(Request $request)
    {
        $member = Member::find($request->id);
        $member->name = $request->name;
        $member->email = $request->email;
        $member->membership_type = $request->membership_type;
        $member->membership_expiration = $request->membership_expiration;
        $member->save();
        return redirect()->route('index')->with('success', ' Successfully added!');
    }
}