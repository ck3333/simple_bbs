<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;

class UserController extends Controller
{
    public function show(Request $request, $id)
    {
        $user = User::find($id);
        return view('users.show', ['user'=>$user]);
    }

    public function edit(Request $request, $id)
    {
        if (Auth::id() == $id) {
            $user = User::find($id);
            return view('users.edit', ['user'=>$user]);
        } else {
            return redirect("/users/{$id}");
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, User::$edit_rules);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        // 画像
        if ($request->picture) {
            $filePath = $request->picture->storeAs('public/user_image', Auth::id() . '.jpg');
            $user->picture = str_replace('public/user_image', '', $filePath);
        }
        // PW
        if ($request->password) {
            $user->password = $request->password;
        } else {
            $user->password = $user->password;
        }

        $user->save();
        return redirect("/users/{$id}")->with('success', 'ユーザー情報の更新が完了しました');
    }
}
