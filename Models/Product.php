<?php
class Product
{
    public $title;
    public $description;
    public $imgUrl;
    public $public_rating;
    public $category;

    // Costruttore
    public function __construct($title, $description, $imgUrl, $public_rating, $category)
    {
        $this->title = $title;
        $this->description = $description;
        $this->imgUrl = $imgUrl;
        $this->public_rating = $public_rating;
        $this->category = $category;
    }

    public function getStarRating()
    {
        $fullStars = round($this->public_rating / 2);

        $emptyStars = 5 - $fullStars;

        $starsString = str_repeat('<i class="fas fa-star"></i>', $fullStars);

        $starsString .= str_repeat('<i class="far fa-star"></i>', $emptyStars);

        return $starsString;
    }

}