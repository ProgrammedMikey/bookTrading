<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller {

    public function getAccount()
    {
        return view('account', ['user' => Auth::user()]);
    }

    public function updateAccount(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'city' => 'required|max:50',
            'state' => 'required|max:50'
        ]);

        $user = Auth::user();
        $user->name = $request['name'];
        $user->city = $request['city'];
        $user->state = $request['state'];
        $user->update();

        return redirect()->route('account');
    }


}
