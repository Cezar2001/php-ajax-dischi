new Vue({
    el: "#app",
    data: {
        discList: [],
    },

    mounted() {
        axios.get("http://localhost/php-ajax-dischi/php/api/api.php").
        then((response) => {
            this.discList = (response.data);
        })
    }
})