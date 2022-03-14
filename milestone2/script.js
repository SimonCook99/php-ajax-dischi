var app = new Vue({
    el: "#root",
    data:{
        listaDischi: [],
        messaggio: "ciao",
        
    },
    methods:{

        chiamaServer(){
            axios.get("http://localhost/php-ajax-dischi/milestone2/serverAPI.php")
                    .then(function(response){
                        this.listaDischi = response.data;
                        console.log(this.listaDischi);
                        
                    }) 
        }
    },
    mounted(){
        this.chiamaServer();
    },
    computed:{

        showDischi(){
            
            return this.listaDischi;
            
        }

    }
})