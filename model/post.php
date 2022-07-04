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
        $this->title = htmlspecialchars($title, ENT_QUOTES);
        $this->firstName = htmlspecialchars($firstName, ENT_QUOTES);
        $this->lastName = htmlspecialchars($lastName, ENT_QUOTES);
        $this->content = htmlspecialchars($content, ENT_QUOTES);
        $this->date = date('m/d/y - H:i');
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