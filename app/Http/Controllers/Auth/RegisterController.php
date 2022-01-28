<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  public function __construct()
  {
    $this->middleware(['guest']);
  }

  public function index()
  {
    return view('pages.auth.register');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'first_name' => 'required|max:255',
      'last_name' => 'required|max:255',
      'email' => 'required|email',
      'password' => 'required|confirmed|min:6|max:255',
      'phone_number' => 'required'
    ]);

    User::create([
      'first_name' => $request->first_name,
      'last_name' => $request->last_name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'phone_number' => $request->phone_number,
    ]);

    auth()->attempt($request->only('email', 'password'));

    return redirect()->route('home');
  }
}
