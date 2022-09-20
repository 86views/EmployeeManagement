<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function change_password(Request $request, User $user) {
      $request->validate([
         'password' => ['required'],
         'confirm_password' => ['required', 'same:password']
      ]);

      $user->update([
        'password'    => Hash::make($request->password)
      ]);

      return redirect()->route('users.index')->with('success', 'Password Change Succesfully');
    }

    
}
