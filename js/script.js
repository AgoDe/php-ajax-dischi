new Vue({
    el:'#app',
    data: {
        dischi: [],
    },
    mounted: function() {

        axios.get('http://localhost:8888/php-ajax-dischi/database.php').then((res) => {
            this.dischi = res.data
            console.log(res.data)
        })
    },
        
    methods: {

    }
}) 