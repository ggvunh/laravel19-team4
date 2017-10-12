<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'required',
            'password_confirmation' => 'required|same:password',
            'address' => 'required',
            'country' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required'

        ],
        [
            'username.required' => 'Vui lòng nhập tên',
            'email.required' => 'Vui lòng đăng nhập Email',
            'email.email' => 'Không đúng định dạng email',
            'email.unique' => 'Email đã có người sử dụng',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Mật khẩu ít nhất 6 ký tự',
            'password_confirmation.required' => 'Vui lòng nhập mật khẩu xác nhận',
            'password_confirmation.same' => ' Mật khẩu phải giống nhau',
            'address.required' => 'Vui lòng nhập địa chỉ',
            'country.required' => 'Vui nhập nhập quốc gia bạn sinh sống',
            'phone.required' => 'Vui lòng nhập số phone',
            'first_name.required' => 'Vui lòng nhập họ và tên đệm',
            'last_name.required' => 'Vui lòng nhập tên người dùng'
        ]
      );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'country' => $data['country'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'deposit' => $data['deposit'] = 0,
            'role' => $data['role'] = 0

        ]);

    }
}
