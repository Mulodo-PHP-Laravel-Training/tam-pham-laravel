<?php

use Illuminate\Database\Seeder;
use App\Comments;

class CommentTaableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert value
        Comments::create([
        	'content' 	=> 'comment 1',
        	'user_id'	=> 1,
        	'post_id'	=> 1
        	]);

        Comments::create([
        	'content' 	=> 'comment 2',
        	'user_id'	=> 1,
        	'post_id'	=> 2
        	]);

        Comments::create([
        	'content' 	=> 'comment 3',
        	'user_id'	=> 1,
        	'post_id'	=> 3
        	]);

        Comments::create([
        	'content' 	=> 'comment 4',
        	'user_id'	=> 1,
        	'post_id'	=> 4
        	]);
    }
}
