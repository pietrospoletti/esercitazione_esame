<template>
<div>
<p> Aggiungi un bellisimo libro alla lista</p>
<input type='text' v-model='newBook.ISBN' placeholder="Aggiungi ISBN del libro">
<input type='text' v-model="newBook.title" placeholder="Aggiungi titolo del libro">
<input type='text' v-model="newBook.author" placeholder="Aggiungi l'autore del libro">
<input type='text' v-model="newBook.img" placeholder="Aggiungi l'immagine del libro">
<input type='text' v-model="newBook.type" placeholder="Aggiungi l'immagine del libro">
<input type='text' v-model="newBook.stars" placeholder="Aggiungi la valutazione del libro">

<button class='bg-red' @click="conferma()">Aggiungi film</button>
</div>
</template>

<script>
import axios from 'axios';
export default {
    name:"BookCreate",
    data(){
    return {
    newBook:{
        ISBN: "",
        title: "",
        author: "",
        img: "",
        type:"",
        stars: "",
    },
}
},
    methods:{
        async conferma(){
            console.log(this.newBook);
            let response = await axios.post("http://127.0.0.1:8000/api/AddBook", this.newBook);
            console.log(response);
        },
    },
}
</script>