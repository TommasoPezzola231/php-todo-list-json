const { createApp } = Vue 

createApp ({
    data() {
        return {
            API: "api.php",
            toDoList: []
        }
    },
    methods: {
        
    },
    mounted() {
        axios.get(this.API).then(result => {
            this.toDoList = result.data
            console.log(result.data)
            console.log(this.toDoList)
          })
        console.log("Eseguito Correttamente!")
    }
}).mount('#app')