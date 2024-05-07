<?php
class Product {
    public $title;
    public $description;
    public $imgUrl;
    public $public_rating;
    public $category;

    // Costruttore
    public function __construct($title, $description, $imgUrl, $public_rating, $category) {
        $this->title = $title;
        $this->description = $description;
        $this->imgUrl = $imgUrl;
        $this->public_rating = $public_rating;
        $this->category = $category;
    }

    public function showAll() {

    }
    public function showDetail() {

    }

}