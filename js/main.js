const app = new Vue({
    el: '#root',
    data: {
      dischi: ""
    },
    created() {
        axios.get('http://localhost:8888/php-ajax-dischi/api/index.php')
        .then((response) => {
            this.dischi = response.data;
            console.log(response.data);
        })
        .catch(function (error) {
            console.log(error);
        });
    }
});