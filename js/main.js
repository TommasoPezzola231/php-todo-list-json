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
            

            axios.post(this.API, { newTask: {text: this.newTask, done: false} },
                {
                    headers: { 'Content-Type': 'multipart/form-data'}
                }).then(r => {
                    
                console.log(r)
                this.toDoList = r.data
                this.newTask = ""
              })
        },
        changeStatus(element) {
            axios.post(this.API, { status: element} ,
                {
                    headers: { 'Content-Type': 'multipart/form-data'}
                }).then(r => {
                    
                console.log(r)
                this.toDoList = r.data
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