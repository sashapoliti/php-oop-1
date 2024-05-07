<?php
include_once __DIR__ . "/Product.php";

class Book extends Product
{
    public $author;
    public $publication_date;
    public $pages;

    public function __construct($title, $description, $imgUrl, $public_rating, $category, $author, $publication_date, $pages)
    {
        parent::__construct($title, $description, $imgUrl, $public_rating, $category);
        $this->author = $author;
        $this->publication_date = $publication_date;
        $this->pages = $pages;
    }


}