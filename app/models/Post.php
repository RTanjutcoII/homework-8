<?php

namespace app\models;

class Post {
    public function getAllPostsByTitle($params) {
        //in future these will come from the database

        $allPosts = [
            [
                'id' => '1',
                'title' => 'pinecone'
                'content' => 'i like pinecones.'
            ],
            [
                'id' => '2',
                'title' => 'nathan'
                'content' => 'nathan is a cool guy.'
            ],
        ];

        if (!empty($params['title'])) {
            return array_filter($allPosts, function ($post) use ($params) {
                if ($post['title'] === $params['title']) {
                    return $post;
                };
                return null;
            });
        }

        return $allPosts;
    }

    public function savePosts() {
        //in future this will save a post to the database
    }
}