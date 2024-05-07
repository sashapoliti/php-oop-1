<?php
include __DIR__ . "/../Models/Movie.php";
$jsonMovies = file_get_contents("./Models/movies_db.json");
$dataArray = json_decode($jsonMovies, true);

$movies = [];
foreach ($dataArray as $data) {
    $movie = new Movie($data['title'], $data['description'], $data['imgUrl'], $data['public_rating'], $data['category'], $data['director'], $data['release_date'], );
    $movies[] = $movie;
}
?>

<main class="container">
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
</main>