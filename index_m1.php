<?php
include './src/php_partials/albums.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>php-ajax-dischi</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./dist/assets/index.css" />
</head>

<body>
    <nav>
        <div class="container">
            <img src="./dist/assets/img/spotify-2.svg" alt="" height="40" />
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="albums">
                <?php foreach ($albums as $album => $details) {?>
                <div class="album">
                    <img src="<?php echo $details["poster"]; ?>">
                    <h2 class="title"><?php echo $details["title"]; ?></h2>
                    <h3 class="author"><?php echo $details["author"]; ?></h3>
                    <h4 class="year"><?php echo $details["year"]; ?></h4>
                </div>
                <?php }?>
            </div>
        </div>
    </main>
</body>

</html>