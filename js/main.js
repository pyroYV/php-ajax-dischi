const app = new Vue({
    el:'#app',
    data() {
        return {
            albums:[],
            selectedGenre:'',

        }
    },
    methods: {
        ApiCall(){
                axios.get('http://localhost/php-ajax-dischi/backend/controller.php?')
                .then(results => {
                    this.albums = results.data
                    console.log(this.albums)
                })
        },
        GetGenres(){
            axios.get('http://localhost/php-ajax-dischi/backend/controller.php?genre=' + this.selectedGenre)
            .then(results=>{
                this.albums = results.data
                console.log(this.albums)
            })
        }

    },
    created() {
        this.ApiCall()
       
    },

})
