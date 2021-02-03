axios.get("./src/php_partials/albs_for_js.php").then((response) => {
    let data = response.data;

    //la select per filtrare gli album in base all'artista
    const select = document.getElementById("filter-select");
    data.forEach((element) => {
        select.insertAdjacentHTML(
            "beforeend",
            `<option value="${element.author}">${element.author}</option>`
        );
    });

    generateHTML(data);

    //filtro la selezione in base al valore della select
    let filtered = [];
    select.addEventListener("change", () => {
        let option = select.value;
        if (option != "All") {
            let filtered = data.filter((element) => element.author == option);
            generateHTML(filtered);
        } else {
            generateHTML(data);
        }
        console.log(option);
    });
});

//funzione per generare contenuti nel DOM
const generateHTML = (arr) => {
    //a partire dai data creo un array di oggetti con il markup per ogni singolo album
    const markup = [];
    arr.forEach((album) => {
        let element = {
            poster: `<img src="${album.poster}" />`,
            title: `<h2 class="title">${album.title}</h2>`,
            author: `<h3 class="author">${album.author}</h3>`,
            year: `<h3 class="author">${album.year}</h3>`,
        };
        markup.push(element);
    });

    //inserisco gli oggetti con il markup nel documento
    const albums = document.querySelector(".albums");
    albums.innerHTML = "";
    markup.forEach((element) => {
        const album = document.createElement("div");
        album.classList.add("album");
        for (const info in element) {
            album.innerHTML += element[info];
        }
        albums.insertAdjacentElement("beforeend", album);
    });
};
