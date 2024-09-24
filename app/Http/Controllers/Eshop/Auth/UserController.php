<?php

namespace App\Http\Controllers\Eshop\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    //
    public function LoadLogin()
    {
        return view('eshop.pages.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            if (!Hash::check($request->password, $user->password)) {
                return redirect()->back()->with('error', 'Your password is not correct!');
            } else {
                Auth::login($user);
                return redirect()->route('eshop.home');
            }
        } else {
            return redirect()->back()->with('error', 'User not found!');
        }
    }


    public function LoadRegister()
    {
        return view('eshop.pages.auth.register');
    }

    public function  register(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6'
        ]);

        $user = User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]
        );


        if (!$user) {
            return redirect()->back()->with('error', 'You csn\'n  register Account Now!,');
        } else {
            $this->sendOTP($user);
            return redirect()->route('auth.verify', $user->id);
        }
    }


    public function LoadVerify($id)
    {
        $users = User::find($id);
        $user = $users->email;
        return view('eshop.pages.auth.verify', compact('user'));
    }


    public function verify(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || $user->otp != $request->otp) {
        return redirect()->back()->with('error', "Code OTP is not true!!!");
        }

        return redirect()->route('auth.login');
    }


    public function sendOTP($user)
    {
        $otp = rand(100000, 999999);

        // Update OTP for the user
        User::where('email', $user->email)->update(['otp' => $otp]);

        // Prepare email data
        $data = [
            'email' => $user->email,
            'title' => 'Mail Verification',
            'body'  => 'Your OTP is: ' . $otp,
        ];

        try {

            Mail::send('eshop.pages.auth.mailVerification', ['data' => $data], function ($message) use ($data) {
                $message->to($data['email'])->subject($data['title']);
            });

            return redirect()->route('auth.verify', $user->id);

        } catch (\Exception $e) {

            Log::error('Mail sending failed: ' . $e->getMessage());

            // Redirect back with an error message
            return redirect()->back()->with('error', 'Failed to send OTP. Please try again.');
        }
    }

}
