<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="js/script.js" type="module"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>PHP ToDo List JSON</title>
</head>
<body>  


    <div id="app">
        <div class="text-center">
                <h1 class="py-4 text-uppercase">Cosa fare con il cane</h1> 
            <div>
                <input type="text" v-model="newTask">
                <button class="btn btn-primary" type="submit"  @click="addTask">Add</button>

                <ul>                    
                    <li v-for="(todo,index) in arrayList" > {{todo.text}} 
                        <i class="fa-solid fa-xmark" @click="removeTask(index)" style="cursor:pointer"></i>
                    </li>
                </ul>

            </div>    
                
        
        </div>
    </div>

</html>