const app = new Vue({
    el: '#root',
    data: {
      dischi: null
    },
    created() {
        axios.get('http://localhost:8888/php-ajax-dischi/api/index.php')
        .then((response) => {
            this.dischi = response.data;
        })
        .catch(function (error) {
            console.log(error);
        })
    }
});