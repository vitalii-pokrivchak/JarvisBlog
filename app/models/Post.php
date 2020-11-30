<?php

namespace app\models;

use jarvis\models\ModelObject;

/**
 * Post
 */
class Post extends ModelObject
{
    private string $title;
    private string $short_content;
    private string $content;
    private string $poster;
    private int $author_id;
    private int $category_id;
    private string $created_at;

    /**
     * GetTitle
     *
     * @return string
     */
    public function GetTitle(): string
    {
        return $this->title;
    }
    /**
     * GetShortContent
     *
     * @return string
     */
    public function GetShortContent(): string
    {
        return $this->short_content;
    }
    /**
     * GetContent
     *
     * @return string
     */
    public function GetContent(): string
    {
        return $this->content;
    }
    /**
     * GetPoster
     *
     * @return string
     */
    public function GetPoster(): string
    {
        return $this->poster;
    }
    /**
     * GetAuthorId
     *
     * @return int
     */
    public function GetAuthorId(): int
    {
        return $this->author_id;
    }
    /**
     * GetCategoryId
     *
     * @return int
     */
    public function GetCategoryId(): int
    {
        return $this->category_id;
    }
    /**
     * GetCreatedAt
     *
     * @return int
     */
    public function GetCreatedAt(): string
    {
        return $this->created_at;
    }
    /**
     * GetAllData
     *
     * @return array
     */
    public function GetAllData(): array
    {
        return array(
            'title' => $this->title,
            'short_content' => $this->short_content,
            'content' => $this->content,
            'poster' => $this->poster,
            'author_id' => $this->author_id,
            'category_id' => $this->category_id
        );
    }
}
