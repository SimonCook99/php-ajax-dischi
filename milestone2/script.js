var app = new Vue({
    el: "#root",
    data:{
        listaDischi: []
        
    },
    methods:{

        chiamaServer(){
            axios.get("http://localhost/php-ajax-dischi/milestone2/serverAPI.php")
                    .then((response) =>{
                        this.listaDischi = response.data;
                        console.log(this.listaDischi);
                        
                    }) 
        }
    },
    created(){
        this.chiamaServer();
    }
})