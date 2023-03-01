<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class Movies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Movie::create([
            'movie_id' => 1,
            'movie_title' => 'A Quiet Place PartII',
            'movie_release_date' => '2021-06-10',
            'movie_image' => 'm1.jpg'
        ]);

        Movie::create([
            'movie_id' => 2,
            'movie_title' => 'Black Widow',
            'movie_release_date' => '2021-07-07',
            'movie_image' => 'm2.jpg'
        ]);

        Movie::create([
            'movie_id' => 3,
            'movie_title' => 'Lord of the ring',
            'movie_release_date' => '2021-06-17',
            'movie_image' => 'm3.jpg'
        ]);

        Movie::create([
            'movie_id' => 4,
            'movie_title' => 'Frozen II',
            'movie_release_date' => '2021-07-01',
            'movie_image' => 'm4.jpg'
        ]);

        Movie::create([
            'movie_id' => 5,
            'movie_title' => 'Raya and the Last Dragon',
            'movie_release_date' => '2021-07-02',
            'movie_image' => 'm5.jpg'
        ]);
    }
}
