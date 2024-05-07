<?php
include __DIR__ ."/../Models/Movie.php";
$jsonMovies = file_get_contents("./Models/movies_db.json");
$dataArray = json_decode($jsonMovies, true);

$movies = [];
foreach ($dataArray as $data) {
    $movie = new Movie($data['title'], $data['description'], $data['public_rating'], $data['category'], $data['director'], $data['release_date'],);
    $movies[] = $movie;
}
?>

<main class="container">
    <section>
        <h2>Movies</h2>
        <ul>
            <?php foreach ($movies as $movie) : ?>
                <li>
                    <h3><?= $movie->title ?></h3>
                    <p><?= $movie->description ?></p>
                    <p><?= $movie->public_rating ?></p>
                    <p><?= $movie->category ?></p>
                    <p><?= $movie->director ?></p>
                    <p><?= $movie->release_date ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>