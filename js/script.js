new Vue({
    el:'#app',
    data: {
        dischi: [],
        selectedGenre: ''
    },
    mounted: function() {

        axios.get('http://localhost:8888/php-ajax-dischi/database/api.php').then((res) => {
            this.dischi = res.data
        })
    },    
    methods: {
        filterAlbum: function(){
            
            if(this.selectedGenre === '') {
                axios.get('http://localhost:8888/php-ajax-dischi/database/api.php').then((res) => {
                this.dischi = res.data
                })
            } else {
                this.dischi = '';
                axios.get(`http://localhost:8888/php-ajax-dischi/database/api.php?filter=${this.selectedGenre}`).then((res) => {
                this.dischi = res.data
                })
            }
        },
        
    } // end of methods
}) 