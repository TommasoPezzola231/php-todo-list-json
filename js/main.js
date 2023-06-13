const { createApp } = Vue 

createApp ({
    data() {
        return {
            API: "api.php",
            toDoList: [],
            newTask: ""
        }
    },
    methods: {
        Aggiungi() {
            

            axios.post(this.API, {text: this.newTask, done: false},
                {
                    headers: { 'Content-Type': 'multipart/form-data'}
                }).then(r => {
                    
                console.log(r.data)
                //this.toDoList.push({text: this.newTask, done: false})  

              })
        }
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