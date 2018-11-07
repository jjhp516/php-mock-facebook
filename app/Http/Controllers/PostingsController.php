<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory;
use App\Models\Posting;
use App\User;

class PostingsController extends Controller
{
    public function index($id = 1)
    {
        $primaryUser = $this->getPrimaryUser($id);
        $peopleYouMayKnow = $this->getPeopleYouMayKnow($primaryUser);
        $postings = $this->getPostings($primaryUser);

        $viewData = [
            'user' => $primaryUser,
            'peopleYouMayKnow' => $peopleYouMayKnow,
            'postings' => $postings,
        ];

        return view('/welcome', $viewData);
    }


    public function getPrimaryUser($id)
    {
        $primaryUser = User::findOrFail($id);

        return $primaryUser;
    }


    public function getPeopleYouMayKnow($primaryUser)
    {
        return User::where('id', '!=', $primaryUser->id)->get();
    }

    
    public function getPostings($primaryUser)
    {
        $postings = Posting::where('user_id', $primaryUser->id)->get();

        return $postings;
    }
}
