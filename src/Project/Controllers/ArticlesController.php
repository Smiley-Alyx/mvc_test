<?php

namespace Project\Controllers;

use Project\Models\Articles\Article;
use Project\Models\Users\User;
use Project\View\View;

class ArticlesController
{
    /**
     * @var View
     */
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    public function view(int $articleId)
    {
        $article = Article::getById($articleId);

        if ($article === null) {
            // todo: добавить эксепшн
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }

        $this->view->renderHtml('articles/view.php', [
            'article' => $article
        ]);
    }
}