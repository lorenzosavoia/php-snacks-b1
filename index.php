<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="div" id="app">
        <div v-for="car in cars" class="div">
            <img style="width: 300px;" :src="car.immagineVetrina" alt="">
            <ul>
                <li>{{car.marca}}</li>
                <li>{{car.modello}}</li>
                <li>{{car.motorizzazione}}</li>
                <li>{{car.annoImmatricolazione}}</li>
                <li>{{car.km}}</li>
                <li>{{car.colore}}</li>
                <li>{{car.prezzo}}</li>
                <li>{{car.allestimento}}</li>
                <li>{{car.descrizioneVenditore}}</li>
                <li>{{car.localita}}</li>
                <li>{{car.targa}}</li>
            </ul>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>