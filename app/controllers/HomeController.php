<?php

namespace app\controllers;

use app\models\AuthorModel;
use app\models\CategoryModel;
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

        $this->bundle->setData([
            'posts' => $this->post_model->get_all(),
            'categories' => $this->category_model->get_all(),
            'authors' => $this->author_model->get_all()
        ]);
        parent::render($this->bundle);
    }
}
