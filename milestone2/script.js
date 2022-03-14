var app = new Vue({
    el: "#root",
    data:{
        listaFilm: [],
        messaggio: "ciao"
    },
    methods:{

        chiamaServer(){
            axios.get("http://localhost/php-ajax-dischi/milestone2/serverAPI.php")
                    .then(function(response){
                        this.listaFilm = response.data;
                        console.log(this.listaFilm);
                    }) 
        }
    },
    mounted(){
        this.chiamaServer();
    }
})