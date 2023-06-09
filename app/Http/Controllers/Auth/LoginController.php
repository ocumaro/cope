<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

     
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

   
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    
     public function authenticate(Request $request)
     {
         $credentials = $request->only('email', 'password');
     
         $validator = Validator::make($credentials, [
             'email' => ['required', 'string', 'email', 'max:255', 'exists:users'],
             'password' => ['required', 'string', 'min:8'],
         ]);
     
         if ($validator->fails()) {
             return redirect()->back()->withErrors($validator)->withInput();
         }
     
         if (Auth::attempt($credentials)) {
             $user = Auth::user();
     
             if ($user->is_accepted != 1) {
                 Auth::logout();
                 return redirect()->back()->with('notaccepted', 'Your account has not been accepted yet.');
             }
     
             return redirect()->intended('/');
         }
     
         return redirect()->back()->with('error', 'Invalid credentials.');
     }
     
}
