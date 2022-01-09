<?php

namespace Project\Controllers;

use Project\Models\Articles\Article;
use Project\Services\Db;
use Project\View\View;

class MainController
{
    /**
     * @var View
     */
    private $view;

    /**
     * @var Db
     */
    private $db;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
        $this->db = new Db();
    }

    public function main()
    {
        $articles = Article::findAll();
        $this->view->renderHtml('main/main.php', [
            'articles' => $articles
        ]);
    }

    public function sayHello(string $name)
    {
        $this->view->renderHtml('main/hello.php', ['name' => $name]);
    }
}
