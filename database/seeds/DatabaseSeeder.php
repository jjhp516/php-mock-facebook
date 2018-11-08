<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Profile;
use App\Models\Post;
use Faker\Factory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i < 10; $i++) {
            $user = new User();
            $user->email = $faker->email;   
            $user->name = $faker->name;
            $user->password = bcrypt('qwer1234');
            $user->save();

            $profile = new Profile();
            $profile->user_id = $user->id;
            $profile->occupation = $faker->jobTitle.' at '.$faker->company;
            $profile->education = 'SAIT';
            $profile->location = $faker->city.', '.$faker->stateAbbr;
            $profile->hometown = $faker->city.', '.$faker->stateAbbr;
            $profile->pic = 'https://picsum.photos/200/?random'.rand(1, 20);
            $profile->coverPic = 'https://picsum.photos/1500/500/?random'.rand(1, 20);
            $profile->save();

            $count = rand(2, 5);
            for ($j=0; $j < $count; $j++) {
                $post = new Post();
                $post->content = $faker->paragraph;
                $post->user_id = $user->id;
                $post->save();
            }
        }

        // $this->call(UsersTableSeeder::class);
    }
}
