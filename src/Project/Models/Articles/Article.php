<?php

namespace Project\Models\Articles;

use Project\Models\Users\User;

class Article
{
    /**
     * @var string $title
     * @var string $text
     * @var User $author
     */
    private $title;
    private $text;
    private $author;

    public function __construct(string $title, string $text, User $author)
    {
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return User
     */
    public function getAuthor()
    {
        return $this->author;
    }
}
