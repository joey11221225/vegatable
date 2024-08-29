<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    //
    public function show()
    {
        $user = Auth::user();
        $profile = $user->profile;

        if (!$profile) {
            $profile = Profile::create([
                'user_id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
            ]);
        }

        return view('profile', compact('profile'));
    }
    
    public function editProfile()
    {
        $user = Auth::user();
        $profile = $user->profile;

        return view('editProfile', compact('profile'));
    }

    public function updateProfile(Request $request, Profile $profile)
    {
        $form = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required'
        ]);

        $profile->update($form);
        return redirect()->route('profile', $profile->id)->with('message', 'Edit profile successful');
    }

}