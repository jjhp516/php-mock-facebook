<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory;
use App\Models\Post;
use App\User;

class PostsController extends Controller
{
    public function index() {
        $allPosts = $this->getAllPosts();
    }


    public function userPage($id) {
        $loggedInUser = request()->user();

        $thisUser = $this->getThisUser($id);
        $peopleYouMayKnow = $this->getPeopleYouMayKnow($loggedInUser);
        $posts = $this->getPosts($thisUser);

        $viewData = [
            'loggedInUser' => $loggedInUser,
            'user' => $thisUser,
            'peopleYouMayKnow' => $peopleYouMayKnow,
            'posts' => $posts,
        ];

        return view('/welcome', $viewData);
    }


    public function getAllUsers() {
        $allUsers = User::get();

        return $allUsers;
    }


    public function getAllPosts() {
        $allPosts = Post::get();

        return $allPosts;
    }


    public function getThisUser($id) {
        $thisUser = User::findOrFail($id);

        return $thisUser;
    }


    public function getPeopleYouMayKnow($loggedInUser) {
        return User::where('id', '!=', $loggedInUser->id)->get();
    }

    
    public function getPosts($user) {
        $posts = Post::where('user_id', $user->id)->get();

        return $posts;
    }
}
