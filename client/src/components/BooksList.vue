<template>
<div class="flex h-full w-full text-center">
  <div v-for="(book, index) in book" :key="index">
      <div  class="flex flex-col mx-3 mr-2 text-center">
        <img :src="book.img" alt="book" class="flex" />
          <div class="flex flex-col text-black  text-center h-full w-full">
            <div class="flex mb-1">{{ book.title}} </div>
            <div class="flex mb-1"> {{book.author}}</div>
            <div class="flex mb-1"> {{book.type}}</div>
            <div class="flex mb-1"> {{book.stars}}</div>
          </div>
          <div class="mx-3">
              <button @click="edit(book)" class="text-yellow-600 mr-2">Modifica</button>
              <button class="text-red-600"> Cancella</button>
          </div>
      </div>
  </div>
</div>
</template>

<script>
import axios from "axios";
export default {
  name: "BookList",
  data() {
    return {
      book: [],
    };
  },
  async mounted() {
    let response = await axios.get("http://127.0.0.1:8000/api/AllBooks");
    this.book = response.data;
  },
  
  methods:{
    async edit(book) {
      await axios.put("http://127.0.0.1:8000/api/EditBook/" + book.id, book);
    },
  },  
}
</script>