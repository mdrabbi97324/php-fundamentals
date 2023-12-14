<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?>
                    (<?= $book['releaseYear']?>) - By 
                    <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>

    </ul>
    <h2>Below are Some movie listing</h2>
    <h3>Total movies are : <?= count($movies) ?></h3>
    <ul>
        <?php foreach($filteredMovies as $movie) : ?>
            <li><?= $movie['name'] ?> (<?= $movie['releaseYear']?>)</li>
        <?php endforeach; ?>
    </ul>


    <h3>
        <?php
        $message = "Hello, ";
        $greet = function ($name) use ($message) {
            echo $message . $name;
        };
        $greet("Jhon");
        ?>
    </h3>
    </body>
</html>