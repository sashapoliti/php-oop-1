<?php
include_once __DIR__ . "/Product.php";

class Movie extends Product
{
    public $director;
    public $release_date;

    public function __construct($title, $description, $public_rating, $category, $director, $release_date)
    {
        parent::__construct($title, $description, $public_rating, $category);
        $this->director = $director;
        $this->release_date = $release_date;
    }
}