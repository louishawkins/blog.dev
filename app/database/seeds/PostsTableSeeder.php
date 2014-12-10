<?php

class PostsTableSeeder extends Seeder 
{
    public function run()  
    {  
        $faker = Faker\Factory::create();

        Post::truncate();

        for($i=0; $i<25; $i++)  
        {  
            Post::create([  
                'title'   => $faker->realText($maxNbChars = 25),  
                'body'    => $faker->realText($maxNbChars = 1000),  
                'user_id' => '1'
            ]);  
        }
    }
} 
