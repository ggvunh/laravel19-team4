<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Toastr;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('guest', ['except' => 'logout']);
     }
     protected function authenticated(Request $request, $user)

    {

        if ( $user->role==1 ) {// do your margic here
            Toastr::success('Bạn đã đăng nhập thành công', $title = null, $options = []);
            return redirect()->route('admin');
        }
            Toastr::success('Bạn đã đăng nhập thành công', $title = null, $options = []);
            return redirect('admin');
    }

}
