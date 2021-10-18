<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $posts;

    public function __construct() 
    {
        $path = storage_path() . "/blog-posts.json";
        $json = json_decode(file_get_contents($path), true);

        $this->posts = $json['posts'];
    }

    function index() {
        return view("master", ["posts" => $this->posts]);
    }

    function showArticle($article) {

        foreach ($this->posts as $post) {
            if (str_replace(' ', '-', $post['title']) == $article) {
                return view("article", ["post" => $post]);
            }
        }

        abort(404);
    }
}
