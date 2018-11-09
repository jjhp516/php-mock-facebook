<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\User;

class ProfileController extends Controller
{
    public function index() {
        $user = request()->user();

        if (!$user) {
            return redirect('/');
        }

        $profile = $user->profile;
            
        $viewData = [
            'loggedInUser' => $user,
            'profile' => $profile,
        ];

        return view('profile_form', $viewData);
    }

    
    public function update() {
        $user = request()->user();

        if (!$user) {
            return redirect('/');
        }
        
        $formData = request()->all();

        request()->validate([
            'occupation' => 'nullable',
            'education' => 'nullable',
            'location' => 'nullable',
            'hometown' => 'nullable',
            'pic' => 'nullable',
            'coverPic' => 'nullable'
        ]);

        $profile = $user->profile;
        

        $profile->occupation = $formData['occupation'];
        $profile->education = $formData['education'];
        $profile->location = $formData['location'];
        $profile->hometown = $formData['hometown'];
        $profile->pic = $formData['pic'];
        $profile->coverPic = $formData['coverPic'];


        $profile->save();


        return redirect($user->id);
    }
}
