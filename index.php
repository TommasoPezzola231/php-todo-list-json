<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP to do list JSON</title>
    <script src="https://unpkg.com/vue@3"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <li :class="(element.done) ? `completed` : ``">
                        <span @click="changeStatus(index)">{{element.text}}</span>
                        
                    </li>
                </template>
            
            </ul>
        </div>

    </div>

    <script src="./js/main.js"></script>

</body>
</html>