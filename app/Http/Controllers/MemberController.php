<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    /**
     * Display a listing of the members.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $members = Member::all();

        return view('member.login');
    }


    public function store(Request $request)
    {
        $request->validate([
            'staffnumber' => [
                'required',
                'exists:members,staffnumber', // Assuming 'members' is the table name for members
            ],
            'password' => 'required|min:8|max:17',
        ]);

        $member = Member::where('staffnumber', $request->staffnumber)->first();

        if ($member) {
            if (Hash::check($request->password, $member->password)) {
                $request->session()->put('loginId', $member->id);
                return redirect('member.dashboard');
            } else {
                return back()->with('fail', 'Password does not match.');
            }
        } else {
            return back()->with('fail', 'This Staff Number is not in our records.');
        }
    }
}
