<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP to do list JSON</title>
    <script src="https://unpkg.com/vue@3"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
    <div id="app">
        
        <div class="container">
            <h1>To Do List</h1>
            <div>
                <input type="text" placeholder="Aggiungi alla lista" v-model="newTask">
                <button type="submit" @click="Aggiungi">Aggiungi</button>
            </div>


            <ul>
                
                <template v-for="(element, index) in toDoList">
                    <li>{{element.text}}</li>
                </template>
            
            </ul>
        </div>

    </div>

    <script src="./js/main.js"></script>

</body>
</html>