<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    public function createUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'password' => 'required|min:5',
        ]);
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'is_admin' => 0
        ]);
        Alert::success($request->name, 'Has Been Created Account, Please Login.');
        return redirect(route('view.login'));
    }

    public function loginUser(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:5',
        ]);

        if (auth()->attempt($request->only(['username', 'password']))) {
            Alert::success(auth()->user()->name, 'logged in successfully, welcome to the Laravel App!');
            return redirect(route('view.dashboard'));
        } else {
            Alert::error($request->username, 'The username or password you entered is incorrect!');
            return redirect()->back();
        }
    }

    public function bannedUser($id)
    {
        $user = User::find($id);
        $user->delete();
        Alert::success($user->name, 'Have Been Successfully Banned!');
        return redirect()->back();
    }

    public function logoutUser()
    {
        Alert::info(auth()->user()->name, 'See You Next Time!');
        Auth::logout();
        return redirect(route('view.login'));
    }
}
