<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'message' => 'message_test1',
            'member_id' => '1',
            'reply_post_id' => '0',
        ];
        $post = new Post;
        $post->fill($param)->save();

        $param = [
            'message' => 'message_test2',
            'member_id' => '2',
            'reply_post_id' => '0',
        ];
        $post = new Post;
        $post->fill($param)->save();

        $param = [
            'message' => 'message_test3',
            'member_id' => '3',
            'reply_post_id' => '0',
        ];
        $post = new Post;
        $post->fill($param)->save();
    }
}
