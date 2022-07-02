<?php
declare(strict_types=1);

class Post {
    private string $title;
    private string $date;
    private string $content;
    private string $firstName;
    private string $lastName;

    public function __construct($title, $firstName, $lastName, $content)
    {
        date_default_timezone_set('UTC');
        $this->title = $title;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->content = $content;
        $this->date = date('m/d/y');
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
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

}