<?php
include_once __DIR__ . "/Product.php";

class Movie extends Product
{
    public $director;
    public $release_date;

    public function __construct($title, $description, $imgUrl, $public_rating, $category, $director, $release_date)
    {
        parent::__construct($title, $description, $imgUrl, $public_rating, $category);
        $this->director = $director;
        $this->release_date = $release_date;
    }

    public function getStarRating() {
        $fullStars = round($this->public_rating / 2);

        $emptyStars = 5 - $fullStars;

        $starsString = str_repeat('<i class="fas fa-star"></i>', $fullStars);

        $starsString .= str_repeat('<i class="far fa-star"></i>', $emptyStars);

        return $starsString;
    }
}