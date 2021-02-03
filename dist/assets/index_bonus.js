/******/ (() => { // webpackBootstrap
/*!****************************!*\
  !*** ./src/index_bonus.js ***!
  \****************************/
axios.get("./src/php_partials/albs_for_js.php").then(function (response) {
  var data = response.data;
  var albums = document.querySelector(".albums");
  var markup = [];
  data.forEach(function (album) {
    var element = {
      poster: "<img src=\"".concat(album.poster, "\" />"),
      title: "<h2 class=\"title\">".concat(album.title, "</h2>"),
      author: "<h3 class=\"author\">".concat(album.author, "</h3>"),
      year: "<h3 class=\"author\">".concat(album.year, "</h3>")
    };
    markup.push(element);
  });
  markup.forEach(function (element) {
    var album = document.createElement("div");
    album.classList.add("album");

    for (var info in element) {
      album.innerHTML += element[info];
    }

    albums.insertAdjacentElement("beforeend", album);
  });
});
/******/ })()
;