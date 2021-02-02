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
                <div class="album">
                    <?php foreach ($albums as $album => $details) {?>
                    <img src="<?php echo $details["poster"]; ?>" class="poster">
                    <h2 class="title"><?php echo $details["title"]; ?></h2>
                    <h3 class="author"><?php echo $details["author"]; ?></h3>
                    <h4 class="year"><?php echo $details["year"]; ?></h4>
                    <?php }?>
                </div>
            </div>
        </div>
    </main>
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./dist/assets/index.js"></script>
</body>

</html>