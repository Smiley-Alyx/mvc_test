<?php

namespace Project\Models\Articles;

use Project\Models\ActiveRecordEntity;
use Project\Models\Users\User;

class Article extends ActiveRecordEntity
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $text;

    /**
     * @var string
     */
    protected $authorId;

    /**
     * @var string
     */
    protected $createdAt;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return User
     */
    public function getAuthor(): User
    {
        return User::getById($this->authorId);
    }

    /**
     * @return int
     */
    public function getAuthorId(): int
    {
        return (int) $this->authorId;
    }

    protected static function getTableName(): string
    {
        return 'articles';
    }
}
