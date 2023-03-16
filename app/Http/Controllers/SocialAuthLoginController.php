<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SocialAuthLoginController extends Controller
{
    public function ajaxRequestPost(Request $request)
    {
        try {
           
            $userData = ($request->all());
            
            // Check if user already exists with the given Google ID or email
            $user = User::where('google_id', $userData["sub"])
                        ->orWhere('email', $userData["email"])
                        ->first();
            
            if ($user) {
               
                // User with the given Google ID or email exists
                if (!$user->google_id) {
                    // Update the user record with Google ID if it is not available
                    $user->update([
                        'google_id' => $userData["sub"],
                    ]);
                }
                
                // Log in the user
                Auth::loginUsingId($user->id, TRUE);
                return redirect()->intended($this->redirectPath());
    
            } else {
                
                // User with the given Google ID or email does not exist, create a new user
                $newUser = User::create([
                    'name' => $userData["name"],
                    'username' => $userData["email"],
                    'email' => $userData["email"],
                    'email_verified_at' => now(),
                    'google_id' => $userData["sub"],
                    'password' => encrypt('123456789')
                ]);
    
                // Log in the new user
                Auth::loginUsingId($newUser->id, TRUE);
                return redirect()->intended($this->redirectPath());
            }
    
            return redirect()->back()
            ->withInput()
            ->with([
                'error' => 'ไม่สามารถเข้าระบบได้ ข้อมูลไม่ถูกต้อง.',
            ]);
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }
    public function ajaxRequestPost2(Request $request)
{
    try {
        $userData = ($request->all());
          
        $user = User::where('facebook_id', $userData["id"])
        ->orWhere('email', $userData["email"])
        ->first();
        
        if ($user) {
            // User with the given Facebook ID exists, log in the user
            Auth::loginUsingId($user->id, TRUE);
            return redirect()->intended($this->redirectPath());
        } else {
            // User with the given Facebook ID does not exist, create a new user
            $newUser = User::create([
                'name' => $userData["name"],
                'username' => $userData["name"],
                'email' => $userData["email"],
                'email_verified_at' => now(),
                'facebook_id' => $userData["id"],
                'password' => encrypt('123456789')
            ]);

            // Log in the new user
            Auth::loginUsingId($newUser->id, TRUE);
            return redirect()->intended($this->redirectPath());
        }

        return redirect()->back()
            ->withInput()
            ->with([
                'error' => 'ไม่สามารถเข้าระบบได้ ข้อมูลไม่ถูกต้อง.',
            ]);
    } catch (Exception $e) {
        error_log($e->getMessage());
    }
}
}