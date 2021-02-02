let mix = require("laravel-mix");

mix.js("src/index.js", "assets")
    .sass("src/sass/index.scss", "assets")
    .setPublicPath("dist");
