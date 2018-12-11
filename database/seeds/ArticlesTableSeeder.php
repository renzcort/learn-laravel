<?php

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //let's run truncate our existing records to start from stratch
        Article::truncate();

        /*$faker = \Faker\Factory::create();

        // let's create a few article in our database 
        for ($i = 0; $i < 50; $i++) {
            Article::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }*/
        factory(Article::class, 30)->create();
    }
}
