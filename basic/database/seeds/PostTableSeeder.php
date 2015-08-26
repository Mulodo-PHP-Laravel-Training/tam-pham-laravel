<?php

use Illuminate\Database\Seeder;
use App\Posts;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert value

        Posts::create(
        	[
        		'title'			=> 'post 1',
        		'alias'			=> 'post-1',
        		'description'	=> 'post 1',
        		'content'		=> 'post 1',
        		'image'			=> 'post_1.jpg',
        		'user_id'		=> 1,
        		'status'		=> 1,
        		'ordering'		=> 1
        	]
        	);

        Posts::create(
        	[
        		'title'			=> 'post 2',
        		'alias'			=> 'post-2',
        		'description'	=> 'post 2',
        		'content'		=> 'post 2',
        		'image'			=> 'post_2.jpg',
        		'user_id'		=> 1,
        		'status'		=> 1,
        		'ordering'		=> 2
        	]
        	);

        Posts::create(
        	[
        		'title'			=> 'post 3',
        		'alias'			=> 'post-3',
        		'description'	=> 'post 3',
        		'content'		=> 'post 3',
        		'image'			=> 'post_3.jpg',
        		'user_id'		=> 1,
        		'status'		=> 1,
        		'ordering'		=> 3
        	]
        	);

        Posts::create(
        	[
        		'title'			=> 'post 4',
        		'alias'			=> 'post-4',
        		'description'	=> 'post 4',
        		'content'		=> 'post 4',
        		'image'			=> 'post_4.jpg',
        		'user_id'		=> 1,
        		'status'		=> 1,
        		'ordering'		=> 4
        	]
        	);

    }
}
