<?php
declare(strict_types=1);

class Post {
    private string $title;
    private Date $date;
    private string $content;
    private string $author;

    public function __construct($title, $author, $content)
    {
        $this->title = $title;
        $this->author = $author;
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

}