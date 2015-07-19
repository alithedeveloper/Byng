<?php

namespace Byng\Http\Controllers;

use Byng\User;
use Illuminate\Http\Request;

use Byng\Http\Requests;
use Byng\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;


class SessionsController extends Controller
{

    /**
     *  Introducing the filter to check if the user is not logged in
     */
    function __construct()
    {
       $this->middleware('guest', ['except' => 'destroy']);
        
    }

    /**
     * Log user in after doing the validation
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($this->signIn($request)) {
            // Authentication passed...
            \Flash::success('Welcome in '. Auth::user()->name);
            return redirect()->intended('/articles');
        }
        \Flash::error('Sorry your login credentials didn\'t match');
        return redirect()->back();

    }


    /**
     *  Log User Out
     */
    public function destroy()
    {
        Auth::logout();

        \Flash::message('You have been logged out');
        return redirect('/');
    }


    /**
     * Attempt to sign in the user.
     *
     * @param  Request $request
     * @return boolean
     */
    protected function signIn(Request $request)
    {
        return Auth::attempt($this->getCredentials($request));
    }

    /**
     * Get the login credentials and requirements.
     *
     * @param  Request $request
     * @return array
     */
    protected function getCredentials(Request $request)
    {
        return [
            'email'    => $request->input('email'),
            'password'    => $request->input('password'),
        ];
    }
}
