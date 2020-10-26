<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileAdminController extends Controller
{
  public function index()
  {
      $user = Auth::user();
      return view('admin.profile', compact('user'));
  }
  public function reset()
    {
        $user = Auth::user();
        return view('admin.reset', compact('user'));
    }
    public function update(Request $request, $id)
      {
          $this->validate($request, [
              'name' => 'required|max:50',
              'email' => 'required|email|max:50|unique:users'
          ]);

          $request->user()->update($request->all());
          return redirect(route('profileadmin'));
      }
}
