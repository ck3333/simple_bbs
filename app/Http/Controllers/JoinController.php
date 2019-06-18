<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\HTTP\Response;
// use App\Member;
use App\User;

class JoinController extends Controller
{
    public function index(Request $request)
    {
        $param = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ];
        return view('join.index', $param);
    }

    // public function check(Request $request)
    // {
    //     $this->validate($request, Member::$rules);
    //     $param = [
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => $request->password,
    //     ];
    //     return view('join.check', $param);
    // }

    public function signup(Request $request)
    {
        $this->validate($request, User::$rules);
        $member = new User;
        $form = $request->all();
        unset($form['_token']);
        $member->fill($form)->save();

        return redirect('/join/thanks');
    }

    public function thanks(Request $request)
    {
        return view('join.thanks');
    }
}
