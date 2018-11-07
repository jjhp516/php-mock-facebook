<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\User;

class ProfileController extends Controller
{
    public function index()
    {
        // get the currently logged in user
        $user = request()->user();

        if (!$user) {
            return redirect('/');
        }

        // get the currently logged in user's profile
        $profile = $user->profile;
        // pass the user and the profile into the view
        $viewData = [
            'user' => $user,
            'profile' => $profile,
        ];

        return view('profile_form', $viewData);
    }

    public function update()
    {
        // get the currently logged-in user
        $user = request()->user();

        if (!$user) {
            return redirect('/');
        }
        
        // get the form data from the request
        $formData = request()->all();

        request()->validate([
            'handle' => 'required|max:10',
            'description' => 'required|max:255',
            'website' => 'required',
            'image' => 'required',
        ]);

        $profile = $user->profile;
        
        // Update properties of the profile
        $profile->handle = $formData['handle'];
        $profile->description = $formData['description'];
        $profile->website = $formData['website'];
        $profile->image = $formData['image'];

        // Save the profile
        $profile->save();

        // Redirect back to the form
        return redirect("/profile");
    }
}
