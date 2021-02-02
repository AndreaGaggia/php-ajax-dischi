const app = new Vue({
    el: "#app",
    data: {
        albums: null,
    },
    methods: {
        getAlbums() {
            axios.get("./src/php_partials/albs_for_js.php").then((response) => {
                this.albums = response.data;
            });
        },
    },
    created() {
        this.getAlbums();
    },
});
