<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Faker\Factory;


class User {}
class Posting {}

class TimelineController extends Controller
{
    //
    public function index() {
        $shyGuy = $this->getShyGuy();
        $currentUser = $this->getCurrentUser();
        
        $postings = $this->getPostings($shyGuy, $currentUser);

        $viewData = [
            'user' => $shyGuy,

            'viewer' => $currentUser,

            'postings' => $postings
        ];

        return view('welcome', $viewData);
    }

    public function getShyGuy() {
        $shyGuy = new User();

        $shyGuy->name = "Shy Guy";
        $shyGuy->coverPic = "https://scontent.fyyc3-1.fna.fbcdn.net/v/t1.0-9/45196159_365263880876934_3639389896029765632_n.jpg?_nc_cat=105&_nc_ht=scontent.fyyc3-1.fna&oh=c386c0ad223080f0ca446b5352a2f37a&oe=5C7B3062";
        $shyGuy->profilePic = "https://scontent.fyyc3-1.fna.fbcdn.net/v/t1.0-1/21230795_115319175871407_1531708751397484442_n.jpg?_nc_cat=107&_nc_ht=scontent.fyyc3-1.fna&oh=2c7f371a8210f5143050cb3d207350bd&oe=5C4E18F4";
        $shyGuy->job = "Bowser's minion";
        $shyGuy->location = "Mushroom Kingdom";
        $shyGuy->homeTown = "Mushroom Kingdom";
        $shyGuy->friendCount = "9";

        return $shyGuy;
    }

    public function getCurrentUser() {
        $currentUser = new User();
        $currentUser->name = "Elephant Man";
        $currentUser->profilePic = "https://image.shutterstock.com/image-vector/black-elephant-head-on-white-450w-280340339.jpg";

        return $currentUser;
    }

    public function getPostings($shyGuy, $currentUser) {
        $faker = Factory::create();

        $posting1 = new Posting();
        $posting1->user = $shyGuy;
        $posting1->timeStamp = '2 hrs';
        $posting1->content = $faker->paragraph;
        $posting1->viewer = $currentUser;

        $posting2 = new Posting();
        $posting2->user = $shyGuy;
        $posting2->timeStamp = '17 hrs';
        $posting2->content = $faker->paragraph;
        $posting2->viewer = $currentUser;

        $posting3 = new Posting();
        $posting3->user = $shyGuy;
        $posting3->timeStamp = 'October 29';
        $posting3->content = $faker->paragraph;
        $posting3->viewer = $currentUser;

        $posting4 = new Posting();
        $posting4->user = $shyGuy;
        $posting4->timeStamp = 'October 11';
        $posting4->content = $faker->paragraph;
        $posting4->viewer = $currentUser;

        return [$posting1, $posting2, $posting3, $posting4];
    }
}
