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
    <div id="app">
        <nav>
            <div class="container">
                <img src="./dist/assets/img/spotify-2.svg" alt="" height="40" />
            </div>
        </nav>

        <main>
            <div class="container">
                <div class="albums">

                    <div class="album" v-for="album in albums">
                        <img :src="album.poster">
                        <h2 class="title">{{album.title}}</h2>
                        <h3 class="author">{{album.author}}</h3>
                        <h4 class="year">{{album.year}}</h4>
                    </div>

                </div>
            </div>
        </main>
    </div>
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./dist/assets/index.js"></script>
</body>

</html>