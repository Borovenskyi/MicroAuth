<?php


namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Cookie;

class LoginController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('name', $request->input('name'))->first();

        if (($request->input('password') == $user->password)) {
            $apikey = base64_encode(str_random(40));
            User::where('name', $request->input('name'))->update(['api_key' => "$apikey"]);
            $cookie = new Cookie('login',$apikey);
            return redirect()->route('home')->withCookie($cookie);

        } else {

            return response('Unauthorized.', 401);

        }

    }
    public function logout(Request $request)
    {
        $apikey = $request->cookie('login');
        if(!empty($apikey)){
            User::where('api_key', $apikey)->update(['api_key' => null]);
            return redirect('/');
        }
    }
}