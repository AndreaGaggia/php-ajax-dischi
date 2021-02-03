axios.get("./src/php_partials/albs_for_js.php").then((response) => {
    const data = response.data;
    const albums = document.querySelector(".albums");
    const markup = [];
    data.forEach((album) => {
        let element = {
            poster: `<img src="${album.poster}" />`,
            title: `<h2 class="title">${album.title}</h2>`,
            author: `<h3 class="author">${album.author}</h3>`,
            year: `<h3 class="author">${album.year}</h3>`,
        };
        markup.push(element);
    });
    markup.forEach((element) => {
        const album = document.createElement("div");
        album.classList.add("album");
        for (const info in element) {
            album.innerHTML += element[info];
        }
        albums.insertAdjacentElement("beforeend", album);
    });
});
