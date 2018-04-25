<?php


namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegController extends Controller


{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Laravel\Lumen\Http\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function reg(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->password = $request->password;
        $user->save();
        return redirect('/');
    }
}