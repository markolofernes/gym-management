<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    public function index()
    {
        return view('index')
            ->with('members', Member::latest()->get());
    }
    public function create(Request $request)
    {
        $member = new Member;
        $member->name = $request->name;
        $member->email = $request->email;
        // $member->membership_type = $request->membership_type;
        $member->membership_expiration = $request->membership_expiration;
        $member->trainer_id = $request->trainer_id;
        $member->membership_id = $request->membership_id;
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
        return view('editform')->with('member', $member);
    }
    public function update(Request $request)
    {
        $member = Member::find($request->id);
        $member->name = $request->name;
        $member->email = $request->email;
        // $member->membership_type = $request->membership_type;
        $member->membership_expiration = $request->membership_expiration;
        $member->trainer_id = $request->trainer_id;
        $member->membership_id = $request->membership_id;
        $member->save();
        return redirect()->route('index')->with('success', ' Successfully added!');
    }

    public function showtrainer($id)
    {
        $member = Member::findOrFail($id);
        $trainer = $member->trainer;
        return view('trainer')->with('trainer', $trainer);
    }

    public function showmembership($id)
    {
        $member = Member::findOrFail($id);
        $membership = $member->membership;
        return view('membership')->with('membership', $membership);
    }
}