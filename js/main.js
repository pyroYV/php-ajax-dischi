const app = new Vue({
    el:'#app',
    data() {
        return {
            albums:[],
            try:'ciao'

        }
    },
    methods: {
        ApiCall(){
            axios.get('http://localhost/php-ajax-dischi/backend/controller.php')
            .then(results => {
                this.albums = results.data.results.data
                console.log(this.albums)
            })
        }
    },
    created() {
        this.ApiCall()
       
    },

})
