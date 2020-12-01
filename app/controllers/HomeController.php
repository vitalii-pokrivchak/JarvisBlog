<?php

namespace app\controllers;

use app\models\AuthorModel;
use app\models\CategoryModel;
use app\models\Post;
use app\models\PostModel;
use jarvis\config\Config;
use jarvis\controllers\Controller;
use jarvis\core\Bundle;

class HomeController extends Controller
{
    private Bundle $bundle;
    private AuthorModel $author_model;
    private PostModel $post_model;
    private CategoryModel $category_model;
    public function __construct()
    {
        $this->bundle = new Bundle((string)Config::GetAppSettingByKey("app_name"), "HomeView");
        $this->author_model = new AuthorModel;
        $this->post_model = new PostModel;
        $this->category_model = new CategoryModel;
    }
    public function index()
    {
        $data = [];
        foreach ($this->post_model->get_all() as $post) {
            $post->SetCategory($this->category_model->get($post->GetCategoryId()));
            $post->SetAuthor($this->author_model->get($post->GetAuthorId()));
            $data[] = $post;
        }

        $first_post = $this->post_model->get(1);
        $first_post->SetCategory($this->category_model->get($first_post->GetCategoryId()));
        $first_post->SetAuthor($this->author_model->get($first_post->GetCategoryId()));

        $this->bundle->setData([
            'data' => $data,
            'categories' => $this->category_model->get_all(),
            "first_post" => $first_post
        ]);
        parent::render($this->bundle);
    }
}
