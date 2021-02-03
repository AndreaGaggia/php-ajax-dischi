/******/ (() => { // webpackBootstrap
/*!****************************!*\
  !*** ./src/index_bonus.js ***!
  \****************************/
axios.get("./src/php_partials/albs_for_js.php").then(function (response) {
  var data = response.data; //la select per filtrare gli album in base all'artista

  var select = document.getElementById("filter-select");
  data.forEach(function (element) {
    select.insertAdjacentHTML("beforeend", "<option value=\"".concat(element.author, "\">").concat(element.author, "</option>"));
  });
  generateHTML(data); //filtro la selezione in base al valore della select

  var filtered = [];
  select.addEventListener("change", function () {
    var option = select.value;

    if (option != "All") {
      var _filtered = data.filter(function (element) {
        return element.author == option;
      });

      generateHTML(_filtered);
    } else {
      generateHTML(data);
    }

    console.log(option);
  });
}); //funzione per generare contenuti nel DOM

var generateHTML = function generateHTML(arr) {
  //a partire dai data creo un array di oggetti con il markup per ogni singolo album
  var markup = [];
  arr.forEach(function (album) {
    var element = {
      poster: "<img src=\"".concat(album.poster, "\" />"),
      title: "<h2 class=\"title\">".concat(album.title, "</h2>"),
      author: "<h3 class=\"author\">".concat(album.author, "</h3>"),
      year: "<h3 class=\"author\">".concat(album.year, "</h3>")
    };
    markup.push(element);
  }); //inserisco gli oggetti con il markup nel documento

  var albums = document.querySelector(".albums");
  albums.innerHTML = "";
  markup.forEach(function (element) {
    var album = document.createElement("div");
    album.classList.add("album");

    for (var info in element) {
      album.innerHTML += element[info];
    }

    albums.insertAdjacentElement("beforeend", album);
  });
};
/******/ })()
;