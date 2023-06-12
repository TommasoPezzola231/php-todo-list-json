const { createApp } = Vue 

createApp ({
    data() {
        return {
            API: "api.php"
        }
    },
    methods: {

    },
    mounted() {
        axios.get(this.API).then(result => {
            console.log(result.data)
          })
        console.log("Eseguito Correttamente!")
    }
}).mount('#app')