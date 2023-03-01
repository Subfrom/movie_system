<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class Comments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Comment::create([
            'movie_id' => 1,
            'user_id' => 1,
            'comment_text' => 'สนุกมากเลยครับ',
            'comment_score' => 5
        ]);

        Comment::create([
            'movie_id' => 2,
            'user_id' => 3,
            'comment_text' => 'ใช้ได้เลยทีเดียว',
            'comment_score' => 4
        ]);

        Comment::create([
            'movie_id' => 1,
            'user_id' => 3,
            'comment_text' => 'ไม่ค่อยชอบเลย',
            'comment_score' => 2
        ]);

        Comment::create([
            'movie_id' => 4,
            'user_id' => 2,
            'comment_text' => 'เฉยๆมาก',
            'comment_score' => 3
        ]);

        Comment::create([
            'movie_id' => 3,
            'user_id' => 1,
            'comment_text' => 'โอเคเลยนะ ชอบมากเลยครับ',
            'comment_score' => 4
        ]);

        Comment::create([
            'user_id' => 2,
            'movie_id' => 2,
            'comment_text' => 'งั้นๆมากเลย',
            'comment_score' => 2
        ]);
    }
}
