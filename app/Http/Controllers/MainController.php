<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\User;

class MainController extends Controller
{
    public function index() {
        $loggedInUser = request()->user();

        $allPosts = $this->getAllPosts();

        $viewData = [
            'loggedInUser' => $loggedInUser,

            'posts' => $allPosts
        ];

        return view('/welcome', $viewData);
    }
    

    public function getAllPosts() {
        $allPosts = Post::orderBy('created_at', 'desc')->get();

        return $allPosts;
    }
}
