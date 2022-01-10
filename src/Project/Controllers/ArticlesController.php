<?php

namespace Project\Controllers;

use Project\Exceptions\NotFoundException;
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
            throw new NotFoundException();
        }

        $this->view->renderHtml('articles/view.php', [
            'article' => $article
        ]);
    }

    public function edit(int $articleId): void
    {
        /**
         * @var Article $article
         */
        $article = Article::getById($articleId);

        if ($article === null) {
            throw new NotFoundException();
        }

        $article->setName('Новое название статьи');
        $article->setText('Новый текст статьи');

        $article->save();
    }

    public function add(): void
    {
        $author = User::getById(1);

        $article = new Article();
        $article->setAuthor($author);
        $article->setName('Новое название статьи');
        $article->setText('Новый текст статьи');

        $article->save();
    }

    public function delete(int $id)
    {
        $article = Article::getById($id);

        if ($article !== null) {
            $article->delete();
            $this->view->renderHtml('articles/delete.php');
        } else {
            throw new NotFoundException();
        }
    }
}
