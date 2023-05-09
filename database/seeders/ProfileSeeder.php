<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create(
            [
                'user_id'=>1,
                'img1'=>"hanni1.png",
                'img2'=>"hanni2.jpg",
                'img3'=>"hanni3.jpg",
                'nickname'=>"Hanni",
                'bio'=>"I was really hoping",
                'course'=>"BSIT",
                'school'=>"Ateneo De Naga University",
                'age'=>19,
                'height'=>"5'11",
                'hobbies1'=>"Cooking",
                'hobbies2'=>"Reading",
                'hobbies3'=>"Gaming",
                'interest1'=>"Cosplay",
                'interest2'=>"Origami",
                'interest3'=>"Science",
                'gender'=>"Female",
            ]
        );

        Profile::create(
            [
                'user_id'=>2,
                'img1'=>"chaewon1.jpeg",
                'img2'=>"chaewon2.jpg",
                'img3'=>"chaewon3.jpeg",
                'nickname'=>"Chae",
                'bio'=>"HEEEEEY!",
                'course'=>"Tourism",
                'school'=>"Ateneo De Naga University",
                'age'=>20,
                'height'=>"5'5",
                'hobbies1'=>"Cooking",
                'hobbies2'=>"Reading",
                'hobbies3'=>"Gaming",
                'interest1'=>"Cosplay",
                'interest2'=>"Origami",
                'interest3'=>"Science",
                'gender'=>"Female",
            ]
        );

    }
}
