<?php

namespace App\Http\Controllers;

use App\Models\Social;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
      public function redirectToFacebook()
      {
          return Socialite::driver('facebook')->redirect();
      }

      // Facebook callback
      public function handleFacebookCallback()
      {
          $user = Socialite::driver('facebook')->user();

          $this->_registerOrLoginUser($user);

          // Return home after login
          return redirect()->route('admin/home');
      }


          // Google login
          public function redirectToGoogle()
          {
              return Socialite::driver('google')->redirect();
          }

          // Google callback
          public function handleGoogleCallback()
          {
              $user = Socialite::driver('google')->user();
              $this->_registerOrLoginUser($user);
          }
      protected function _registerOrLoginUser($data)
      {
          $user = User::where('email', '=', $data->email)->first();
          if (!$user) {
              $user = new User();
              $user->name = $data->name;
              $user->email = $data->email;
              $user->id = $data->id;
              $user->image = $data->image;
              $user->save();
          }
          Auth::login($user);
      }









}
