<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\rc;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class Authuntication extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showFormRegister()
    {
        //
        return view('Clients.auth.register');
    }


    public function Register(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'email' => "required|email|unique:users,email",
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'
        ]);

        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Use Hash::make
        ]);

        return redirect()->route('home');
    }


    public function loginForm()
    {
        return view('Clients.auth.login');
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }


    //



    // ProfileController.php

    public function changePrfile(Request $request)
    {
        $user = Auth::user();

        // Validate the request
        $request->validate([
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            // Delete the old image if exists
            if ($user->profile_image) {
                Storage::delete($user->profile_image);
            }

            $image = $request->file('profile_image');
            $imagePath = $image->store('profile_images', 'public');
            $user->profile_image = $imagePath;
        }

        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }


    public function changePersonal(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
        ]);

        // Find the user by ID and update their information
        User::where('id', $id)->update($validatedData);

        // Optionally, flash a success message to the session
        session()->flash('success', 'Your personal information has been updated successfully.');

        // Redirect back to a relevant page, for example, a profile page
        return redirect()->route('profile', ['id' => $id]);
    }

}
