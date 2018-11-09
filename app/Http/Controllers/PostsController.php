<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\User;

class PostsController extends Controller
{
    public function index() {
        $loggedInUser = request()->user();
        $peopleYouMayKnow = $this->getPeopleYouMayKnow($loggedInUser);
        $allPosts = $this->getAllPosts();

        $viewData = [
            'loggedInUser' => $loggedInUser,
            'peopleYouMayKnow' => $peopleYouMayKnow,
            'posts' => $allPosts
        ];

        return view('/welcome', $viewData);
    }


    public function getAllPosts() {
        $allPosts = Post::orderBy('created_at', 'desc')->get();

        return $allPosts;
    }


    public function getPeopleYouMayKnow($loggedInUser) {
        return User::where('id', '!=', $loggedInUser->id)->get();
    }
    




    public function userPage($id) {
        $loggedInUser = request()->user();

        $thisUser = $this->getThisUser($id);
        $posts = $this->getPosts($thisUser);

        $viewData = [
            'loggedInUser' => $loggedInUser,
            'user' => $thisUser,
            'posts' => $posts,
        ];

        return view('/user_page', $viewData);
    }


    public function getThisUser($id) {
        $thisUser = User::findOrFail($id);

        return $thisUser;
    }
 
    
    public function getPosts($user) {
        $posts = Post::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();

        return $posts;
    }
}


    
        
