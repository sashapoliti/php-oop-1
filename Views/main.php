<?php
/* Load movies data */
include __DIR__ . "/../Models/Movie.php";
$jsonMovies = file_get_contents("./Models/movies_db.json");
$dataArray = json_decode($jsonMovies, true);

$movies = [];
foreach ($dataArray as $data) {
    $movie = new Movie($data['title'], $data['description'], $data['imgUrl'], $data['public_rating'], $data['category'], $data['director'], $data['release_date'] );
    $movies[] = $movie;
}

/* Load books data */
include __DIR__ . "/../Models/Book.php";
$jsonBooks = file_get_contents("./Models/books_db.json");
$dataArray = json_decode($jsonBooks, true);

$books = [];
foreach ($dataArray as $data) {
    $book = new Book($data['title'], $data['description'], $data['imgUrl'], $data['public_rating'], $data['category'], $data['author'], $data['publication_date'], $data['pages'] );
    $books[] = $book;
}
?>

<main class="container">

    <!-- MOVIES -->
    <section class="container">
        <h2>Movies</h2>
        <div class="card-deck d-flex flex-wrap">
        <?php foreach ($movies as $movie): ?>
            <div class="card">
                <div class="card-img-container">
                    <img class="card-img-top" src="<?= $movie->imgUrl ?>" alt="Poster <?= $movie->title ?>">
                </div>
                <div class="card-body position-relative ">
                    <span class="vote-stars"><?= $movie->getStarRating() ?></span>
                    <h5 class="card-title"><?= $movie->title ?></h5>
                    <span class="info"><?= $movie->director ?> | <?= $movie->category ?> | <?= $movie->release_date ?></span>
                    <p class="card-text">
                        <?= $movie->description ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </section>

    <!-- BOOKS -->
    <section class="container">
        <h2>Books</h2>
        <div class="card-deck d-flex flex-wrap">
        <?php foreach ($books as $book): ?>
            <div class="card">
                <div class="card-img-container">
                    <img class="card-img-top" src="<?= $book->imgUrl ?>" alt="Poster <?= $book->title ?>">
                </div>
                <div class="card-body position-relative ">
                    <span class="vote-stars"><?= $book->getStarRating() ?></span>
                    <h5 class="card-title"><?= $book->title ?></h5>
                    <span class="info"><?= $book->author ?> | <?= $book->category ?> | <?= $book->publication_date ?></span>
                    <p class="card-text">
                        <?= $book->description ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </section>
</main>