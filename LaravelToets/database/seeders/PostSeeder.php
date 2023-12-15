<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();
        
        $post->title = 'My Cat';
        $post->content = 'My cat is cute.';
        $post->user_id = 1;
        $post->save();

        $post = new Post();

        $post->title = 'My Dog';
        $post->content = 'My dog is cute.';
        $post->user_id = 2;
        $post->save();

        $post = new Post();

        $post->title = 'My Bird';
        $post->content = 'My bird is cute.';
        $post->user_id = 3;
        $post->save();

        $post = new Post();

        $post->title = 'My Fish';
        $post->content = 'My fish is cute.';
        $post->user_id = 4;
        $post->save();

        $post = new Post();

        $post->title = 'My Lizard';
        $post->content = 'My lizard is cute.';
        $post->user_id = 5;
        $post->save();

        $post = new Post();

        $post->title = 'My Snake';
        $post->content = 'My snake is cute.';
        $post->user_id = 6;

        $post->save();

        $post = new Post();

        $post->title = 'My Turtle';
        $post->content = 'My turtle is cute.';
        $post->user_id = 7;
        $post->save();

        $post = new Post();

        $post->title = 'My Hamster';
        $post->content = 'My hamster is cute.';
        $post->user_id = 8;
        $post->save();

        $post = new Post();

        $post->title = 'My Guinea Pig';
        $post->content = 'My guinea pig is cute.';
        $post->user_id = 9;
        $post->save();

        $post = new Post();

        $post->title = 'My Rabbit';
        $post->content = 'My rabbit is cute.';
        $post->user_id = 10;
        $post->save();

    }
}
